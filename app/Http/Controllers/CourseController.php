<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $course_data = Course::all();
        return view('backend.course.index',compact('course_data'));
    }

    public function create()
    {
        return view('backend.course.create');
    }

    public function store(Request $request)
    {

        $course_data = new Course();
        $course_data->course_title = $request->course_title;
        $course_data->course_duration = $request->course_duration;
        $course_data->course_fee = $request->course_fee;
        $course_data->course_description = $request->course_description;

        if($request->hasFile('course_photo')){
            $upload = $request->file('course_photo');
            $extention = $upload->getClientOriginalName();
            $file_name = time().rand(0,9999).'.'.$extention;
            $upload->move('uploads/course/',$file_name);
            $course_data->course_photo = $file_name;
        }

        $course_data->save();

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $course_data = Course::where('id',$id)->first();
        // dd($course_data);
        return view('backend.course.edit',compact('course_data'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $deleted =  Course::find($id);
        $deleted->delete();
        return back();

    }
}
