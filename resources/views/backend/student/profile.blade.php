@extends('master.backend_master')

@section('dashboard')

    <section>
      <div class="bg-slate-500 px-10 py-2 mb-3 flex items-center justify-between">
        <div class="flex items-center">
          <img class="w-20 h-20 " src="{{asset('uploads/student/'.$student_data->student_photo)}}" alt="">
          <span class="text-2xl ml-5 text-white">{{$student_data->student_name}}</span>
        </div>
        <div class="float-right">
          <button class="px-4 py-2 bg-sky-500 text-white rounded font-bold">Update Profile</button>
        </div>
      </div>
    
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-10">
        <div class="col-span-2 bg-gray-100 my-auto mt-0">
          <div class="bg-sky-500 w-full py-4 px-5 rounded-t-lg">
            <span class="text-white  text-lg">Information</span>
          </div>
          <div class="px-5 py-3 border-2 border-t-0 border-gray-200 shadow-lg">
            <div class="">
              <span class="text-sky-500 text-lg">Full Name</span><br>
              <span>{{$student_data->student_name}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Email</span><br>
              <span>{{$student_data->student_mail}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Phone</span><br>
              <span>{{$student_data->student_phone}}</span>
            </div>
          </div>
        </div>
        <div class="bg-gray-100 my-auto mt-0">
          <div class="bg-sky-500 w-full py-4 px-5 rounded-t-lg">
            <span class="text-white  text-lg">Identification</span>
          </div>
          <div class="py-3 px-5  border-2 border-t-0 border-gray-200 shadow-lg">
            <div class="mb-2">
              <span class="text-lg">Roll</span><br>
              <span>{{$student_data->roll_no}}</span>
            </div>
            <div class="mb-2">
              <span class="text-lg">Registration</span><br>
              <span>{{$student_data->register_no}}</span>
            </div>
            <div class="mb-2">
              <span class="text-lg">Admission Type</span><br>
              <span>From Campus</span><br>
              <span></span>
            </div>
          </div>
        </div>
    
    
        <div class="col-span-2 bg-gray-100 my-auto mt-0">
          <div class="bg-sky-500 w-full py-4 px-5 rounded-t-lg">
            <span class="text-white  text-lg">Personal Information</span>
          </div>
          <div class="px-5 py-3  border-2 border-t-0 border-gray-200 shadow-lg">
            <div class="">
              <span class="text-sky-500 text-lg">Father Name</span><br>
              <span>{{$student_data->father_name}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Father's Phone</span><br>
              <span>{{$student_data->father_phone}}</span>
            </div>
            <div class="">
              <span class="text-sky-500 text-lg">Mother's Name</span><br>
              <span>{{$student_data->mother_name}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Mother's Phone</span><br>
              <span>{{$student_data->mother_phone}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Gender</span><br>
              <span>{{$student_data->student_gender}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Date Of Birth</span><br>
              <span>{{$student_data->dete_of_birth}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Relegion</span><br>
              <span>{{$student_data->relegion}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Blood Group</span><br>
              <span>{{$student_data->blood_group}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Educational Qualification</span><br>
              <span>{{$student_data->educational_qualification}}</span>
            </div>
            <div class="mt-1">
              <span class="text-sky-500 text-lg">Present Address</span><br>
              <span>{{$student_data->present_address}}</span>
            </div>
    
          </div>
        </div>
    
         <div class="bg-gray-100  mt-0">
          <div class="bg-sky-500 w-full py-4 px-5 rounded-t-lg">
            <span class="text-white  text-lg">Academic Information</span>
          </div>
          <div class="py-3 px-5  border-2 border-t-0 border-gray-200 shadow-lg">
            <div class="mb-2">
              <span class="text-lg">Program</span><br>
              <span>{{App\Models\Course::find($student_data->course_id)->course_title}}</span>
            </div>
            <div class="mb-2">
              <span class="text-lg">Batch Id</span><br>
              <span>{{$student_data->course_id}}</span>
            </div>
            <div class="mb-2">
              <span class="text-lg">Starting Date</span><br>
              <span>{{$student_data->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection