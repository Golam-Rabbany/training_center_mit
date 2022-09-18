@extends('master.backend_master')

@section('data_table_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('dashboard')
<section class="overflow-x-scroll mx-2 my-2">
    <table id="myTable" class="table-auto border-collapse border border-slate-500 w-full ">
        <thead>
          <tr>
            <th class="border border-slate-600 text-center px-2 py-3">Id</th>
            <th class="border border-slate-600 text-center px-2 py-3">Course Title</th>
            <th class="border border-slate-600 text-center px-2 py-3">Course Duration</th>
            <th class="border border-slate-600 text-center px-2 py-3">Course Fee</th>
            <th class="border border-slate-600 text-center px-2 py-3">Course_description</th>
            <th class="border border-slate-600 text-center px-2 py-3">Action</th>
       
          </tr>
        </thead>
        <tbody>
            @foreach ($course_data as $datas)
          <tr>
            <td class="border border-slate-600 text-center px-2 py-3">{{$loop->iteration}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->course_title}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->course_duration}} Month</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->course_fee}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">{{$datas->course_description}}</td>
            <td class="border border-slate-600 text-center px-2 py-3">
            <div class="flex justify-between">
                <div>
                    <a href="{{route('course.edit',$datas->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>    
                    </a>                  
                </div>
                <div>

                <form action="{{route('course.destroy',$datas->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('sure delete')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>
                </form>

                   
                </div>
            </div>
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