@extends('master.backend_master')
@section('data_table_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('dashboard')

    <section class="overflow-x-scroll my-2 mx-2">
        <table id="myTable" class="table-auto border-collapse border border-slate-500 w-full ">
            <thead>
              <tr>
                <th class="border border-slate-600 text-center px-2 py-3">Id</th>
                <th class="border border-slate-600 text-center px-2 py-3">Photo</th>
                <th class="border border-slate-600 text-center px-2 py-3">Name</th>
                <th class="border border-slate-600 text-center px-2 py-3">Email</th>
                <th class="border border-slate-600 text-center px-2 py-3">Phone</th>
                <th class="border border-slate-600 text-center px-2 py-3">Course</th>
                <th class="border border-slate-600 text-center px-2 py-3">View</th>
                <th class="border border-slate-600 text-center px-2 py-3">Payment</th>
                <th class="border border-slate-600 text-center px-2 py-3">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student_data as $datas)
              <tr>
                <td class="border border-slate-600 text-center px-2 py-3">{{$loop->iteration}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">
                  <img class="w-20 h-20 mx-auto" src="{{asset('uploads/student/'.$datas->student_photo)}}" alt="">
              </td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_name}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_mail}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{$datas->student_phone}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">{{App\Models\Course::find($datas->course_id)->course_title}}</td>
                <td class="border border-slate-600 text-center px-2 py-3">
                  <a href="{{route('student.show',$datas->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-yellow-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                    
                  </a>
                </td>
                <td class="border border-slate-600 text-center px-2 py-3">
                  <a href="{{route('payment.show',$datas->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto text-sky-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    
                  </a>
                </td>
                <td class="border border-slate-600 text-center px-2 py-3">
                  <div class="flex">
                      <div class="mr-4">
                          <a href="{{route('student.edit',$datas->id)}}">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer text-green-500">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>    
                          </a>                  
                      </div>
                      <div>
      
                      <form action="{{route('student.destroy',$datas->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" onclick="return confirm('Are you sure you want to delete?')">
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