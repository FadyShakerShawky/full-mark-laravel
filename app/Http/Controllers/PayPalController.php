<?php

namespace App\Http\Controllers;
use App\Models\Payment; 
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;


class PayPalController extends Controller
{
    
    private $client;

    function __construct()
    {
        $environment = new SandboxEnvironment('AZ5DaDp-tiq0t1oSXoFXu_zOC0ACgF3udD1EuJJk2CfwVG3vD3c7fj-J5kY3UDdG6uHOumrSoWgiDfRr', 'EEz_3Bj0-y7zgSxsZh6Yh_VNbUhEliyWMr-v0Tq7jnoQEf2eaM6K1p83FxMNpOg8VZnUS-GpCGxd1ZFH');
        $this->client = new PayPalHttpClient($environment);
    }

    public function getExpressCheckout($id){
        $payment = Payment::find($id);
        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => 'webmall_'. uniqid(),
                "amount" => [
                    "value" => $payment->total,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success', $id)
            ]
            ];
 
        $response = $this->client->execute($request);

        if($response->statusCode !== 201) {
            abort(500);
        }

        $order = Payment::find($id);
        $order->paypal_id = $response->result->id;
        $order->save();

        foreach ($response->result->links as $link) {
            if($link->rel == 'approve') {
                return redirect($link->href);
            }
        }
    }
    
    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);
        
        return $this->client->execute($request);
    }

    public function getExpressCheckoutSuccess(Request $request, $id)
    {
        $payment = Payment::find($id);

        $response = $this->captureOrder($payment->paypal_id);

        if ($response->result->status == 'COMPLETED') {
            $payment->is_paid = 1;
            $payment->save();
            return redirect('/');

        }

        return redirect('/');


    }
    public function cancelPage(){
        
    }
}