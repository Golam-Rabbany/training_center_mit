@extends('master.frontend_master')

@section('frontend')
<section>
    <span class="block text-3xl font-bold text-center">Our Courses</span>
    <div class="bg-gray-300 w-56 block mx-auto mt-3" style="height:2px; "></div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-2 md:mx-4 lg:mx-10 mt-10">
        @foreach (App\Models\Course::all() as $courses)
            
        <div class="border-2 ">
            <img src="{{ asset('uploads/course/'.$courses->course_photo) }}" alt="">
            <div class="mx-16">
                <span class="block text-center text-2xl font-semibold mt-6 mb-4">{{$courses->course_title}}</span>
                <div class="flex justify-between my-2">
                    <div><span class="text-lg text-gray-800">Course Duration: </span></div>
                    <div><span class="text-lg text-gray-800">{{$courses->course_duration}} Month</span></div>
                </div>
                <div class="bg-gray-300 w-68 block mx-auto my-2" style="height:2px; "></div>
                <div class="flex justify-between my-2">
                    <div><span class="text-lg text-gray-800">Course Fee: </span> </div>
                    <div><span class="text-lg text-gray-800"> {{$courses->course_fee}} Tk</span></div>
                </div>
                <div class="bg-gray-300 w-68 block mx-auto my-2" style="height:2px; "></div>
                <div class="w-full bg-blue-500 text-center my-2"><button class="text-lg rounded-sm text-white px-2 py-1 ">Read More</button></div>

                <div  class="w-full bg-green-500 text-center my-2"><button class="text-lg rounded-sm text-white px-2 py-1 ">Apply Now</button></div>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endsection