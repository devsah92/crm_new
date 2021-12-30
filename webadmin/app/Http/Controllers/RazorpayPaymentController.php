<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class RazorpayPaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $api = new Api("rzp_test_Iszq9bkeVjFw9E", "klT5d7e2OF7Qk3Ax810JxFfC");
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }
        
        Session::put('success', $input['razorpay_payment_id']);
        return redirect()->back();
    }
}
