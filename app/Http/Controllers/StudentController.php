<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{

    public function index()
    {
      $student_data = Student::whereHas('user',function($q){
         return $q->where('status',1);
     })->get();


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
            'student_phone'=>'required|unique:students|numeric|regex:/^01\\d{9}$/',
            'father_name'=>'required',
            'father_phone'=>'unique:students|numeric|min:01000000000|max:01999999999',
            'mother_phone'=>'unique:students|numeric|min:01000000000|max:01999999999',
            'educational_qualification'=>'required',
            'date_of_birth'=>'required',
            'student_photo'=>'required|image|mimes:jpeg,png,jpg',
            'password' => 'min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);


       $user_data = new User();
       $user_data->name = $request->student_name;
       $user_data->email = $request->student_mail;
       $user_data->status = 0;
       $user_data->password = Hash::make($request->password);
    //    $user_data->save();

       if($user_data->save()){
        $student_data = new Student();
        $student_data->user_id =$user_data->id;
        $student_data->course_id =$request->course_id;
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
        $student_data->parmanent_address = $request->parmanent_address;
        $student_data->present_address = $request->present_address;
         if($request->hasFile('student_photo')){
             $upload = $request->file('student_photo');
             $extention = $upload->getClientOriginalName();
             $file_name = time().rand(0,9999).'.'.$extention;
             $upload->move('uploads/student/',$file_name);
             $student_data->student_photo = $file_name;
         }
 
         $student_data->save();
       }
      
       return back()->with('success', 'Admission Form Submitted Successfully');

        // Student::insert($request->except('_token') + [
        //     'created_at'=>Carbon::now(),
        //     'student_photo'=> $image,
        // ]);
        
    }

    public function show($id)
    {
        $student_data = Student::where('id', $id)->first();
        return view('backend.student.profile',compact('student_data'));
    }

    public function edit($id)
    {
        $student_data = Student::where('id', $id)->first();
        return view('backend.student.edit',compact('student_data'));
    }

    public function update(Request $request, $id)
    {
        $user_data = User::find($id);
        $user_data->name = $request->student_name;
        $user_data->email = $request->student_mail;
        $user_data->status = 0;
        $user_data->password = Hash::make($request->password);
     //    $user_data->save();
 
        if($user_data->save()){
         $student_data = Student::find($id);
         $student_data->user_id =$user_data->id;
         $student_data->course_id =$request->course_id;
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
         $student_data->parmanent_address = $request->parmanent_address;
         $student_data->present_address = $request->present_address;
          if($request->hasFile('student_photo')){
            $delete_photo = public_path('uploads/banner/'.$student_data->banner_photo);
            if(File::exists($delete_photo)){
                File::delete($delete_photo);
            }
              $upload = $request->file('student_photo');
              $extention = $upload->getClientOriginalName();
              $file_name = time().rand(0,9999).'.'.$extention;
              $upload->move('uploads/student/',$file_name);
              $student_data->student_photo = $file_name;
          }

          $student_data->update();
        }
        return back();
    }

    public function destroy($id)
    {
        $deleted =  Student::find($id);
        $deleted->delete();
        return back();
    }

    public function stutus($id){

        return view('backend.student.status',[
            'data'=>User::find($id),
            'student'=>Student::where('user_id',$id)->first()
        
        ]);
    }

    public function status_update(Request $request, $id){
      $request->validate([
          'roll_no'=>'required|numeric',
          'register_no'=>'required|numeric',
      ]);

       $update = User::find($id);
        $update->status = $request->status;
       if($update->save()){
        $studentUpdate=Student::where('user_id',$id)->first();
        $studentUpdate->roll_no=$request->roll_no;
        $studentUpdate->register_no=$request->register_no;
        $studentUpdate->save();
       }
    
        return redirect()->route('backend.index');
    }
}
