<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function index(Request $request)
    {
        $amount = $request->amount;
        return view('razorpay')->with('amount', $amount);
    }

    public function askPayment(){
        return view('askPayment');
    }

    public function payment(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('rzp_test_nCrvwhGs9kOalW'), env('exjVp33z6O5gUfhzyNvI7fg8'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

            } catch (\Exception $e) {
                return $e->getMessage();
                \Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}
