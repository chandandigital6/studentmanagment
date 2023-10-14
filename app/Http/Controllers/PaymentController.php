<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $getPayment= Payment::all();
        
        return view('payment.index',compact('getPayment'));
    }
      public function show($payment){
            $showpay=Payment::find($payment);
            // return $showStudent;
            return view('payment.show',compact('showpay'));

      }
    public function create(){
        $enrollment=Enrollment::pluck('id');
        return view('payment.create',compact('enrollment'));
    }

    public function store(PaymentRequest $request){
        // dd($request);
         $payment=Payment::create($request->all());
         return redirect()->route('payment.index');
    }

    public function edit(Payment $payment){
           return view('payment.edit',compact('payment'));
    }
    public function update(Payment $payment, PaymentRequest $request){
        $payment->update($request->all());
        return redirect()->route('payment.index');
    }

    public function delete($payment){
       Payment::findOrfail($payment)->delete();
       return redirect()->route('payment.index');
    }
}
