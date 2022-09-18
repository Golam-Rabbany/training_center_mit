@extends('master.backend_master')

@section('dashboard')
    
    <section class="mx-8">
        <form action="{{route('student.status_update',$data->id)}}" method="POST">
            @csrf
            <div>
                <label for="" class="text-2xl w-full">Change Action</label>
                <select name="status" class="w-1/3 text-lg pl-2" id="">
                    <option class="text-lg"  value="0" @if($data->status==0) selected @endif>Panding</option>
                    <option class="text-lg" value="1" @if($data->status==1) selected @endif>Approve</option>
                    <option class="text-lg" value="2" @if($data->status==2) selected @endif>Cancel</option>
                </select>
            </div>
            <button class="text-lg rounded mt-6 px-2 py-1 bg-blue-500 text-white">Submit</button>
        </form>
    </section>

@endsection

