<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        return view('backend.teacher.index');
    }

    public function create()
    {
        return view('backend.teacher.create');
    }

    public function store(Request $request)
    {
        $teacher_data = new Teacher();
        $teacher_data->teacher_name = $request->teacher_name;
        $teacher_data->desicnation = $request->desicnation;

        if($request->hasFile('teacher_photo')){
            $upload = $request->file('teacher_photo');
            $extention = $upload->getClientOriginalName();
            $file_name = time().rand(0,9999).'.'.$extention;
            $upload->move('uploads/teacher/',$file_name);
            $teacher_data->teacher_photo = $file_name;
        }
        $teacher_data->save();
        return back();
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
