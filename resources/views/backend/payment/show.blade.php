@extends('master.backend_master')

@section('dashboard')
<section class="w-full bg-gray-200 min-h-screen">
    <div class="grid grid-cols-1 mx-6 gap-4">
        <div class="mt-6">
            <p class="text-3xl">Payment</p>
            <form action="{{route('payment.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4">
                    <div>
                        
                        <div class="">
                            <label for="" class="text-xl">Name :</label>
                            <label class="text-xl" for="">{{$student_data->student_name}}</label>
                        </div>
                        <div class="">
                            <label for="" class="text-xl">Course You Assign :</label>
                            <label class="text-xl" for="">{{$student_data->course->course_title}}</label>
                             
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <label for="" class="text-xl">Total Course Fee :</label>
                            <label class="text-xl" for="">{{$student_data->course->course_fee}}</label>
                            <input hidden type="text" name="course_fee" value="{{$student_data->course->course_fee}}">
                        </div>
                        <div>
                            <label for="" class="text-xl">Total Payment :</label>
                            <label class="text-xl" for="">{{$student_data->course->course_fee}}</label>
                        </div>
                        <div>
                            <label for="" class="text-xl">Total Due :</label>
                            <label class="text-xl" for=""></label>
                        </div>
                    </div>

                    <div>
                        <label for="" class="text-xl">Payment</label><br>
                        <input type="number" name="total_pay" class="w-1/2 rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow py-2 px-2  bg-gray-100 border-none">
                        <input type="text" name="student_id" value="{{$student_data->id}}" hidden >
                        <input type="text" name="course_title" value="{{$student_data->course->course_title}}" hidden>
                        <input type="text" name="course_fee" value="{{$student_data->course->course_fee}}" hidden>
                        
                    </div>
                    
                    
                    <input type="text" name="student_name" value="{{$student_data->student_name}}" hidden >
{{-- 
                    <div class="">
                        <label for="" class="text-lg">Course You Assign</label>
                        <input type="text" value=""/>
                    </div> --}}
                </div>
                    <div class="mt-4 ml-4">
                        <button class="px-5 py-2 text-lg text-white bg-blue-500 hover:bg-blue-700 rounded-lg">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection