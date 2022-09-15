@extends('master.backend_master')


@section('dashboard')
    <section class="w-full bg-gray-200 min-h-screen">
        <div class="grid grid-cols-1  mx-6 gap-4">
            <div class="mt-6">
                <p class="text-3xl">Create Course Form</p>
                <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4">
                    <div class=" ">
                        <label for="" class="text-lg">Course Photo</label>
                        <input type="file" name="course_photo"  class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('course_photo')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class=" ">
                        <label for="" class="text-lg">Course Title</label>
                        <input type="text" name="course_title"  class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('course_title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class=" ">
                        <label for="" class="text-lg">Course Duration</label>
                        <select name="course_duration" class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                            <option value="">---select---</option>
                            <option value="2">2 Month</option>
                            <option value="3">3 Month</option>
                            <option value="4">4 Month</option>
                            <option value="6">6 Month</option>
                            <option value="12">12 Month</option>
                        </select>
                        @error('course_duration')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class=" ">
                        <label for="" class="text-lg">Course Fee</label>
                        <input type="text" name="course_fee"  class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('course_fee')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Course Description</label>
                        <textarea name="course_description" rows="5" class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none"></textarea>
                        @error('course_description')
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