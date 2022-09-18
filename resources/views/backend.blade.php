@extends('master.backend_master')

@section('data_table_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection


@section('dashboard')
<div class="content">
    <div class="row">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 w-full">
            
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{App\Models\User::all()->count()}}</h3>
                    <span class="widget-title1">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{App\Models\Student::all()->count()}}</h3>
                    <span class="widget-title1">Student <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{App\Models\Teacher::all()->count()}}</h3>
                    <span class="widget-title1">Teacher <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        
    </div>
</div>


    <section class="overflow-x-scroll mt-32 mx-2">
        <table id="myTable" class="table-auto border-collapse border border-slate-500 w-full ">
            <thead>
                <tr>
                    <th class="border border-slate-600 text-center px-2 py-3">Id</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Name</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Email</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Phone</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Gender</th>
                    <th class="border border-slate-600 text-center px-2 py-3">View</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Status</th>
                    <th class="border border-slate-600 text-center px-2 py-3">Edit Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($student_data as $datas)
                <tr>
                    <td class="border border-slate-600 text-center px-2 py-3">{{$loop->iteration}}</td>
                    <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_name}}</td>
                    <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_email}} Month</td>
                    <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_phone}}</td>
                    <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_gender}}</td>
                    <td class="border border-slate-600 text-center px-2 py-3">
                    <a href="{{route('student.show',$datas->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                    </a>
                    </td>
                    <td class="border border-slate-600 text-center px-2 py-3 text-blue-400">Pending</td>
                    <td class="border border-slate-600 text-center px-2 py-3">
                        <a href="{{route('student.status',$datas->user->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
</section>

@endsection


@section('data_table_js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
</script>
  @endsection