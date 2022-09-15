<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        $student_data = Student::all();
        return view('backend.student.index',compact('student_data'));
    }

    public function create()
    {
        return view('backend.student.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'student_name'=>'required',
            'student_mail'=>'required',
            'student_phone'=>'required|unique:students|max:11',
            'father_name'=>'required',
            'educational_qualification'=>'required',
            'date_of_birth'=>'required',
            'student_photo'=>'required|image|mimes:jpeg,png,jpg',
        ]);


       $user_data = new User();
       $user_data->name = $request->student_name;
       $user_data->email = $request->student_mail;
       $user_data->status = 1;
       $user_data->password = Hash::make($request->password);
    //    $user_data->save();

       if($user_data->save()){
        $student_data = new Student();
        $student_data->user_id =$user_data->id;
        $student_data->student_name = $request->student_name;
        $student_data->student_mail = $request->student_mail;
        $student_data->student_phone = $request->student_phone;
        $student_data->student_gender = $request->student_gender;
        $student_data->father_name = $request->father_name;
        $student_data->father_phone = $request->father_phone;
        $student_data->mother_name = $request->mother_name;
        $student_data->mother_phone = $request->mother_phone;
        $student_data->relegion = $request->relegion;
        $student_data->blood_group = $request->blood_group;
        $student_data->educational_qualification = $request->educational_qualification;
        $student_data->date_of_birth = $request->date_of_birth;
         if($request->hasFile('student_photo')){
             $upload = $request->file('student_photo');
             $extention = $upload->getClientOriginalName();
             $file_name = time().rand(0,9999).'.'.$extention;
             $upload->move('uploads/student/',$file_name);
             $student_data->student_photo = $file_name;
         }
 
         $student_data->save();
       }
      
       return back();

        // Student::insert($request->except('_token') + [
        //     'created_at'=>Carbon::now(),
        //     'student_photo'=> $image,
        // ]);
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
