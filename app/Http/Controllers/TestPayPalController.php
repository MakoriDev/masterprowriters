<?php

namespace App\Http\Controllers;

use App\Helpers\PaypalHelper;
use Illuminate\Http\Request;

class TestPayPalController extends Controller
{
    public function createTransaction()
    {
        return view('test-paypal.create');
    }


    public function processTransaction()
    {
        $data = [
            'intent' => 'CAPTURE',
            'return_url' => route('successTransaction'),
            'cancel_url' => route('cancelTransaction'),
            'id' => 'MPW-02-00002',
            'currency_code' => 'USD',
            'value' => '10.00'
        ];


        $response = PaypalHelper::processTransaction($data);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('createTransaction')
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

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }


    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
