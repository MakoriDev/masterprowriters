<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderFile;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customMessages = [
            'filteredFiles.required' => 'Upload at least one instruction file',
        ];

        $validOrderData = $request->validate([
            'amount' => 'required',
            'email' => 'required|string|email',
            'paper_type' => 'required|string',
            'spacing' => 'required|string',
            'style' => 'required|string',
            'pages' => 'required',
            'level' => 'required',
            'deadline' => 'required',
            'filteredFiles' => 'required'
        ], $customMessages);

        unset($validOrderData['filteredFiles']);
        $validOrderData['number'] = $this->getOrderNumber();
        $validOrderData['deadline_timestamp'] = $this->getDeadlineTimestamp();
        
        $orderId = Order::create($validOrderData)->id;

        $files = $request->file('filteredFiles');

        foreach ($files as $file) {
            $newFilename = $validOrderData['number'] . '_' . str_replace(' ', '', $file->getClientOriginalName());
            $destinationPath = public_path('/files/order-files');
            $file->move($destinationPath, $newFilename);
            $orderFileData = [
                'order_id' => $orderId,
                'name' => $newFilename,
            ];

            OrderFile::create($orderFileData);
        }

        return response()->json([
            'message' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    // Utility functions
    public function getPaperType()
    {
        return response()->json([
            'Abstract',
            'Academic Report',
            'Admission Essay',
            'Analysis Paper',
            'Annotated Bibliography',
            'Argumentative Essay',
            'Article',
            'Article Critique',
            'Article Review',
            'Assessment',
            'Autobiography',
            'Biographies',
            'Book/Movie Review',
            'Book/Movie Review',
            'Business Report',
            'Capstone Project',
            'Case Study',
            'Case Brief Writing',
            'Cause/Effect Analysis',
            'Course Work',
            'Creative Writing',
            'Critical Thinking',
            'Critique Writing',
            'Discussion Post',
            'Dissertation',
            'Dissertation Chapter - Literature Review',
            'Editing/ Proofreading',
            'Essay',
            'Extended Essay Writing',
            'Fact Sheets',
            'Finance &amp; Accounting Assignment',
            'Homework',
            'IB Extended Essay',
            'IB Internal Assessment',
            'IB PPD Form',
            'IB Theatre Directors Notebook',
            'IB TOK Essay',
            'IB TOK Exhibition',
            'Internal Assessment',
            'Lab Report',
            'Letter',
            'Literature Review',
            'Marketing Plan',
            'Memo',
            'Outline',
            'Personal Statement',
            'Persuasive Essay',
            'Programming Assignment',
            'Proposal',
            'Position Paper',
            'Power Point Presentation',
            'Problem-Solving',
            'Question-Answer',
            'Reaction Paper',
            'Resume',
            'Research Paper',
            'Research Proposal',
            'Rhetorical Analysis',
            'Speech',
            'Summary',
            'Thesis',
            'Thesis - Chapter',
            'Thesis Proposal',
            'Term Paper',
            'Theory of Knowledge',
            'Write My Essay for Me',
            'Write My Capstone Project'
        ]);
    }


    public function getPrice(Request $request)
    {
        $level = $request->level;
        $deadline = $request->deadline;
        $numberOfPages = $request->numberOfPages;
        $spacing = $request->spacing;

        $priceList = [
            "high school" => [
                "72 hours" => 10,
                "48 hours" => 10,
                "24 hours" => 15,
                "12 hours" => 18
            ],
            "college" => [
                "72 hours" => 15,
                "48 hours" => 15,
                "24 hours" => 20,
                "12 hours" => 23
            ],
            "masters" => [
                "72 hours" => 20,
                "48 hours" => 20,
                "24 hours" => 25,
                "12 hours" => 28

            ],
            "phd" => [
                "72 hours" => 25,
                "48 hours" => 25,
                "24 hours" => 30,
                "12 hours" => 33
            ]
        ];

        $price = ($spacing == 'double') ? $priceList[$level][$deadline] * $numberOfPages : $priceList[$level][$deadline] * $numberOfPages * 2;
        return response()->json([
            'price' => $price
        ]);
    }


    private function getOrderNumber()
    {
        $ordersCount = Order::count() + 1;

        $formattedOrderCount = sprintf("%05d", $ordersCount);
        $month = date('n');
        return "MPW-$month-$formattedOrderCount";
    }

    private function getDeadlineTimestamp($deadline = '24 hours')
    {

        $hours = (int) preg_replace('/\D/', '', $deadline);
        return Carbon::now()->addHours($hours)->format('Y-m-d H:i:s');
    }
}
