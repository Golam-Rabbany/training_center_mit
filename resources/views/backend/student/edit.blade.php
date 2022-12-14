@extends('master.backend_master')


@section('dashboard')
    <section class="w-full bg-gray-200 min-h-screen">
        <div class="grid grid-cols-1  mx-6 gap-4">
            <div class="mt-6">
                <p class="text-3xl">Edit Student Form </p>
                <form action="{{route('student.update',$student_data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4">
                    <div class=" ">
                        <label for="" class="text-lg">Student Name</label>
                        <input type="text" name="student_name" value="{{ $student_data->student_name }}" class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('student_name')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Student Email</label>
                        <input type="email" name="student_mail" value="{{ $student_data->student_mail }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('student_mail')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Student Phone Number</label>
                        <input type="number" name="student_phone" value="{{ $student_data->student_phone }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('student_phone')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg w-full">Gender</label>
                        <div class="flex">
                            <div class="mx-1">
                                <input type="radio" name="student_gender" value="Male" id="">
                                <label for="" class="text-lg" >Male</label>
                            </div>
                            <div class="mx-1"> 
                                <input type="radio" name="student_gender" value="Female" id="">
                                <label for="" class="text-lg" >Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <label for="" class="text-lg">Father's Name</label>
                        <input type="text" name="father_name" value="{{ $student_data->father_name }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('father_name')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Father's Phone Number</label>
                        <input type="number" name="father_phone" value="{{ $student_data->father_phone }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('father_phone')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Mother's Name</label>
                        <input type="text" name="mother_name" value="{{ $student_data->mother_name }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('mother_name')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Mother's Phone Number</label>
                        <input type="number" name="mother_phone" value="{{ $student_data->mother_phone }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('mother_phone')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Relegion</label>
                        <input type="text" name="relegion" value="{{ $student_data->relegion }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('relegion')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Blood Group</label>
                        <input type="text" name="blood_group" value="{{ $student_data->blood_group }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('blood_group')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Educational Qualification</label>
                        <input type="text" name="educational_qualification" value="{{ $student_data->educational_qualification }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('educational_qualification')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="">
                        <label for="" class="text-lg">Date of Birth</label>
                        <input type="date" name="date_of_birth" value="{{ $student_data->date_of_birth}}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                        @error('date_of_birth')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="">
                        <label for="" class="text-lg">Student Photo</label>
                        <input type="file" name="student_photo" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        <img class="w-24 mt-2" src="{{asset('uploads/student/'.$student_data->student_photo)}}" alt="">
                        @error('student_photo')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div></div>
                    <div class="">
                        <label for="" class="text-lg">Create a Password</label>
                        <input type="password" name="password" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('password')
                            <small class="text-red-400">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                        <label for="" class="text-lg">Confirm Password</label>
                        <input type="password" name="confirm_password" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                        @error('confirm_password')
                            <small class="text-red-500">{{$message}}</small>
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