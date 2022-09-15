@extends('master.backend_master')


@section('dashboard')

    <section class="overflow-x-scroll">
        <table class="table-auto border-collapse border border-slate-500 w-full ">
            <thead>
              <tr>
                <th class="border border-slate-600 text-center px-2 py-3">Id</th>
                <th class="border border-slate-600 text-center px-2 py-3">Student Photo</th>
                <th class="border border-slate-600 text-center px-2 py-3">Student Name</th>
                <th class="border border-slate-600 text-center px-2 py-3">Student Email</th>
                <th class="border border-slate-600 text-center px-2 py-3">Student Phone</th>
                <th class="border border-slate-600 text-center px-2 py-3">Student Gender</th>
                <th class="border border-slate-600 text-center px-2 py-3">Father Name</th>
                <th class="border border-slate-600 text-center px-2 py-3">Father Phone</th>
                <th class="border border-slate-600 text-center px-2 py-3">Mother Name</th>
                <th class="border border-slate-600 text-center px-2 py-3">Mother Phone</th>
                <th class="border border-slate-600 text-center px-2 py-3">Relegion</th>
                <th class="border border-slate-600 text-center px-2 py-3">Blood Group</th>
                <th class="border border-slate-600 text-center px-2 py-3">Date of Birth</th>
                <th class="border border-slate-600 text-center px-2 py-3">Educational Qualification</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student_data as $datas)
              <tr>
                <td class="border border-slate-600 text-center px-2 py-3">{{$loop->iteration}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">
                    <img src="{{asset('uploads/student/'.$datas->student_photo)}}" alt="">
                </td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_name}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_mail}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_phone}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_gender}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->father_name}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->father_phone}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->mother_name}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->mother_phone}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->relegion}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->blood_group}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->date_of_birth}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->educational_qualification}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>

@endsection