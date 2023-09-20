<?php

namespace App\Http\Controllers;
use App\Models\images;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    // public function viewPage(){
    //     return('ImageUpload');
    // }

    public function getImages(){
        // return view('ImageUpload', ['images' => images::get()]);
        $images= images::all();
        return view('ImageUpload')->with('images', $images);
    }
    
    public function upload(Request $request){

        // dd($request->all());
        $image = $request->profile;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/assets/images', $name);
        
        $image_save = new images;
        $image_save->image_path = $name; 
        $image_save->save();
 
        return view('ImageUpload');
    }
}
