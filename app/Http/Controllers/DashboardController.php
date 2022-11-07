<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view dashboard')->only(['index']);
    }


    public function index()
    {
        $allOrders = Order::all()->count();
        $activeOrders = Order::active()->count();
        $completeOrders = Order::complete()->count();
        $feedback = Feedback::all()->count();

        return view('dashboard.index', compact(
            'allOrders',
            'activeOrders',
            'completeOrders',
            'feedback'
        ));
    }
}
