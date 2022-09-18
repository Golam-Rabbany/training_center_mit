@extends('master.frontend_master')

@section('frontend')
<section>
    <div class="owl-carousel owl-carousel-slide">

        @foreach (App\Models\Banner::all() as $banners)
        <div class="">
            <img class="relative" src="{{ asset('uploads/banner/'.$banners->banner_photo) }}" style="height: 585px"
                alt="">
            <div class="absolute bottom-64 left-10 sm:left-20">
                <div>
                    <span class="text-2xl sm:text-3xl lg:text-7xl md:text-5xl font-bold text-yellow-500">{{$banners->offer}}% </span><span class="text-xl sm:text-2xl lg:text-6xl md:text-4xl font-semibold  text-white"></span><span class="text-lg sm:text-xl lg:text-5xl md:text-3xl font-semibold text-blue-500">OFF</span>
                </div>
                <div>
                    <span class="text-3xl @if($loop->index == 0) text-white @else text-black @endif mt-3">{{$banners->quote}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

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

                <div  class="w-full bg-green-500 text-center my-2"><a href="{{route('frontend.admission')}}" class="text-lg rounded-sm text-white px-2 py-1 ">Apply Now</a></div>
            </div>
        </div>
        @endforeach
    </div>

</section>

<section class="my-20">
    <span class="block text-3xl font-bold text-center">Teachers</span>
    <div class="bg-gray-300 w-56 block mx-auto mt-3" style="height:2px; "></div>

    <div class="owl-carousel owl-theme w-full mt-10" id="owl_team">
        @foreach (App\Models\Teacher::all() as $teacher)
        <div class="item">
            <div class="block mx-auto">
                <img style="width: 200px; height:200px" class="mx-auto rounded-full"  src="{{asset('uploads/teacher/'.$teacher->teacher_photo)}}" alt="">
            </div>
            <div class="text-center py-3">
             <div class="mb-1">
                <span class="text-2xl font-semibold">{{$teacher->teacher_name}}</span>
            </div>
            <div>
                <span class="font-semibold">{{$teacher->desicnation}}</span>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection