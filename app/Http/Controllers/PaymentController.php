<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $student_data = Student::all();
        return view('backend.payment.index',compact('student_data'));
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
        $payment_data->due = ($request->course_fee) - ($request->total_pay);
        $payment_data->save();
        return back();
    }

    public function show($id)
    {
        $payment = Payment::where('student_id', $id)->first();
        $student_data = Student::with('course','studentPayment')->where('id', $id)->first();
// return $student_data;
        return view('backend.payment.show',compact('student_data','payment'));
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

    public function invoice(){
        return view('backend.payment.invoice');
    }
}
