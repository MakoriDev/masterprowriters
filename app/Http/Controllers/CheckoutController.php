<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Helpers\PaypalHelper;

class CheckoutController extends Controller
{
    public function showCheckoutForm(Request $request)
    {
        $order = Order::where('number', $request->number)->firstOrFail();
        return view('checkout.showCheckoutForm', compact('order'));
    }


    public function processTransaction(Request $request)
    {
        // dd(gettype($request->amount));
        $data = [
            'intent' => 'CAPTURE',
            'return_url' => route('success-transaction'),
            'cancel_url' => route('cancel-transaction'),
            'id' => $request->number,
            'currency_code' => 'USD',
            // 'value' => $request->amount
            'value' => '1.00'
        ];


        $response = PaypalHelper::processTransaction($data);


        if (isset($response['id']) && $response['id'] != null) {

            $this->updateOrderPaymentToken(
                [
                    'number' => $request->number,
                    'payment_token' => $response['id']
                ]
            );
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect($links['href']);
                }
            }

            return redirect()
                ->route('show-checkout-form', ['number' => $request->number])
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('show-checkout-form', ['number' => $request->number])
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function successTransaction(Request $request)
    {
        $data = [
            'token' => $request->token
        ];

        $response = PaypalHelper::successTransaction($data);

        //dd($response['purchase_units'][0]['reference_id']);
        $orderNumber = $response['purchase_units'][0]['reference_id'];

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            $orderUpdateData = [
                'number' => $orderNumber,
                'payment_status' => 'paid',
                'payment_token' => $request->token
            ];

            $this->updateOrderPaymentStatus($orderUpdateData);

            return redirect()
                ->route('order.create')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('show-checkout-form', ['number' => $orderNumber])
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function cancelTransaction(Request $request)
    {
        $orderNumber = Order::where('payment_token', $request->token)->firstOrFail()->number;
        return redirect()
            ->route('show-checkout-form', ['number' => $orderNumber])
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    private function updateOrderPaymentStatus($data)
    {
        $order = Order::where('number', $data['number'])->firstOrFail();

        $order->update([
            'payment_status' => $data['payment_status'],
            'payment_token' => $data['payment_token']
        ]);
    }

    private function updateOrderPaymentToken($data)
    {
        $order = Order::where('number', $data['number'])->firstOrFail();

        $order->update([
            'payment_token' => $data['payment_token']
        ]);
    }
}
