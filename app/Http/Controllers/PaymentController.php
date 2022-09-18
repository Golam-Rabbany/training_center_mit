<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        // return view('backend.payment.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $payment_data = new Payment();
        $payment_data->student_id = $request->student_id;
        $payment_data->student_name = $request->student_name;
        $payment_data->course_title = $request->course_title;
        $payment_data->course_fee = $request->course_fee;
        $payment_data->total_pay = $request->total_pay;
        $payment_data->save();
        return back();
    }

    public function show($id)
    {
      return  $student_data = Student::with('course','studentPayment')->where('id', $id)->first();
        return view('backend.payment.show',compact('student_data'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
