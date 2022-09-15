@extends('master.backend_master')

@section('dashboard')
    <section class="w-full bg-gray-200 min-h-screen">
        <div class="grid grid-cols-1  mx-6 gap-4">
            <div class="mt-6">
                <p class="text-3xl">Create Teacher Form</p>
                <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4">
                    <div class=" ">
                        <label for="" class="text-lg">Teachers Photo</label>
                        <input type="file" name="teacher_photo"  class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('teacher_photo')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class=" ">
                        <label for="" class="text-lg">Teachers Name</label>
                        <input type="text" name="teacher_name"  class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('teacher_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
 
                    <div class=" ">
                        <label for="" class="text-lg">Teachers Designation</label>
                        <input type="text" name="desicnation"  class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('desicnation')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                   
                </div>

                <div class="mt-4">
                    <button class="px-5 py-2 text-lg text-white bg-blue-500 hover:bg-blue-700 rounded-lg">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </section>

@endsection