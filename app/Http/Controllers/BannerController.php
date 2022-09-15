<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        return view('backend.banner.index');
    }

    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
    {
        $banner_data = new Banner();
        $banner_data->offer = $request->offer;
        $banner_data->quote = $request->quote;

        if($request->hasFile('banner_photo')){
            $upload = $request->file('banner_photo');
            $extention = $upload->getClientOriginalName();
            $file_name = time().rand(0,9999).'.'.$extention;
            $upload->move('uploads/banner/',$file_name);
            $banner_data->banner_photo = $file_name;
        }
        $banner_data->save();

        return back();


        // if($request->hasFile('product_photo')){
        //     $upload = $request->file('product_photo');
        //     $photo_name = time().".".$upload->getClientOriginalExtension();
        //     Image::make($upload)->resize(224, 224)->save(public_path('uploads/product/'.$photo_name));
        //     $products->product_photo = $photo_name;
        // }

        // if($request->hasFile('grocery_main_photo')){
        //     $uploaded = $request->file('grocery_main_photo');
        //     $extention=$uploaded->getClientOriginalName();
        //     $filename=time().rand(0,9999).'.'.$extention;
        //     $uploaded->move('uploads/grocery/',$filename);
        //     $grocery->grocery_main_photo=$filename;
        // }

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
