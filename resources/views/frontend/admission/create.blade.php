@extends('master.frontend_master')

{{-- @section('sweet_alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection --}}

@section('frontend')
<section class="w-full bg-gray-300 min-h-screen">
    <div class="grid grid-cols-1  mx-6 gap-4">
        <div class="mt-6 mx-4 md:mx-20">
            <p class="text-3xl font-bold">Create Student Form </p>
        <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session()->has('success'))
                    <div class="alert bg-green-500 px-4 text-white py-2">
                        {{ session()->get('success') }}
                    </div>
                @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-6 px-4">
                <div class=" ">
                    <label class="text-lg" for="">Select Your Course</label><br>
                    <select name="course_id" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none" id="">
                        <option value="">---select course---</option>
                        @foreach (App\Models\Course::all() as $course_data)
                            <option value="{{$course_data->id}}">{{$course_data->course_title}}</option>
                        @endforeach
                    </select>
                    @error('student_name')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Student Photo</label>
                    <input type="file" name="student_photo" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('student_photo')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class=" ">
                    <label for="" class="text-lg">Name</label>
                    <input type="text" name="student_name" value="{{ old('student_name') }}" class=" rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('student_name')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Email</label>
                    <input type="email" name="student_mail" value="{{ old('student_mail') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('student_mail')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Phone Number</label>
                    <input type="number" name="student_phone" value="{{ old('student_phone') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('student_phone')
                        <small class="text-red-500">{{$message}}</small>
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
                    <input type="text" name="father_name" value="{{ old('father_name') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('father_name')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Father's Phone Number</label>
                    <input type="number" name="father_phone" value="{{ old('father_phone') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('father_phone')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Mother's Name</label>
                    <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('mother_name')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Mother's Phone Number</label>
                    <input type="number" name="mother_phone" value="{{ old('mother_phone') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('mother_phone')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Relegion</label>
                    <input type="text" name="relegion" value="{{ old('relegion') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('relegion')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Blood Group</label>
                    <input type="text" name="blood_group" value="{{ old('blood_group') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('blood_group')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Educational Qualification</label>
                    <input type="text" name="educational_qualification" value="{{ old('educational_qualification') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('educational_qualification')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>

                <div class="">
                    <label for="" class="text-lg">Date of Birth</label>
                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('date_of_birth')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Parmanent Address</label>
                    <input type="text" name="parmanent_address" value="{{ old('parmanent_address') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('parmanent_address')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                <div class="">
                    <label for="" class="text-lg">Present Address</label>
                    <input type="text" name="present_address" value="{{ old('present_address') }}" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2   bg-gray-100 border-none">
                    @error('present_address')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="">
                    <label for="" class="text-lg">Create a Password</label>
                    <input type="password" name="password" class="rounded-md focus:ountline-none focus:ring-1 focus:blue-400 shadow  w-full py-2 px-2  bg-gray-100 border-none">
                    @error('password')
                        <small class="text-red-500">{{$message}}</small>
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

            <div class="mt-4 mb-4 ml-3">
                <button class="px-5 py-2 text-lg text-white bg-blue-500 hover:bg-blue-700 rounded-lg">Submit</button>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection

{{-- @section('sweet_alert_script')

    <script>
        function alertFunction(){
            Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    });
        }
    
</script>
@endsection --}}
