<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $prod=new Product;
        $prod->name=$request->input('name');
        $prod->price=$request->input('price');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/pics',$filename);
            $prod->image=$filename;
        }
        $prod->save();
        return redirect()->back()->with('status','Product image added successfully');
    }
}
