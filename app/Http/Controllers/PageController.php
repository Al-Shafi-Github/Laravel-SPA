<?php

namespace App\Http\Controllers;
use App\Models\images;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getImages(){
        $images= images::all();
        return view('homepage')->with('images', $images);
    }
        

}
