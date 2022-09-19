@extends('master.backend_master')

@section('dashboard')
    
    <section class="mx-8 py-4">
        <form action="{{route('student.status_update',$data->id)}}" method="POST">
            @csrf
              <div class="w-full flex flex-wrap justify-center  ">

                <div class="w-full md:w-1/2 p-2">
                    <label for="" class="text-md w-full">Roll No</label>
                  <input type="number" value="{{$student->roll_no??''}}" class=" py-3 px-2 w-full border rounded-md " name="roll_no">
                </div>

                <div class="w-full md:w-1/2 p-2">
                    <label for="" class="text-md ">Register</label>
                  <input type="number" value="{{$student->register_no??''}}" class=" py-3 px-2 w-full border rounded-md " name="register_no">
                </div>
                <div class="w-full md:w-1/2 my-2">
                    <label for="" class="text-md ">Status</label>
                    <select name="status" class=" py-3 px-2 w-full border rounded-md" id="">
                        <option class="text-lg"  value="0" @if($data->status==0) selected @endif>Panding</option>
                        <option class="text-lg" value="1" @if($data->status==1) selected @endif>Approve</option>
                        <option class="text-lg" value="2" @if($data->status==2) selected @endif>Cancel</option>
                    </select>
                </div>

              </div>
              <div class="flex justify-center">
                <button class="text-lg rounded mt-6 px-2 py-1 bg-blue-500 text-white">Update</button>
              </div>
        </form>
    </section>

@endsection

