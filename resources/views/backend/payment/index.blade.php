@extends('master.backend_master')

@section('dashboard')
<section class="overflow-x-scroll my-2 mx-2">
    <table id="myTable" class="table-auto border-collapse border border-slate-500 w-full ">
        <thead>
          <tr>
            <th class="border border-slate-600 text-center px-2 py-3">Id</th>
            <th class="border border-slate-600 text-center px-2 py-3">Name</th>
            <th class="border border-slate-600 text-center px-2 py-3">Roll</th>
            <th class="border border-slate-600 text-center px-2 py-3">Registration</th>
            <th class="border border-slate-600 text-center px-2 py-3">Email</th>
            <th class="border border-slate-600 text-center px-2 py-3">Course</th>
            <th class="border border-slate-600 text-center px-2 py-3">Payment</th>
            <th class="border border-slate-600 text-center px-2 py-3">View</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($student_data as $datas)

          <tr>
            <td class="border border-slate-600 text-center px-2 py-3">{{$loop->iteration}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_name}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->roll_no}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->register_no}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_mail}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{App\Models\Course::find($datas->course_id)->course_title}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">
                <a href="{{route('payment.show',$datas->id)}}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-sky-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
                </a>
              </td>
            <td class="border border-slate-600 text-center px-2 py-3">
              <a href="{{route('payment.invoice')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-yellow-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>                    
              </a>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
</section>


@endsection