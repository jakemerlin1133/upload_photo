<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){
        $photos = photo::all();
        return view('upload', compact('photos'));
    }

    public function store(Request $request){

        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/', $name);
        $photo = new photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();
        return redirect()->back();
    }
}
