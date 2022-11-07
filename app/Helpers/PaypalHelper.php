<?php

namespace App\Helpers;

use \Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalHelper
{
    public static function processTransaction($data)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => $data['intent'],
            "application_context" => [
                "return_url" => $data['return_url'],
                "cancel_url" => $data['cancel_url'],
            ],
            "purchase_units" => [
                0 => [
                    "reference_id" => $data['id'],
                    "amount" => [
                        "currency_code" => $data['currency_code'],
                        "value" => $data['value']
                    ]
                ]
            ]
        ]);

        return $response;
    }


    public static function successTransaction($data)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($data['token']);

        return $response;
    }
}
