<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload; // Ensure the correct model is used

class UploadController extends Controller
{
    public function index()
    {
        $products = Upload::all(); // Fetch all products
        dd($products); 
        return view('product_list', compact('products')); // Pass the products to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $upload = new Upload;
        $upload->name = $request->input('name');
        $upload->price = $request->input('price');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/pics'), $filename);
            $upload->image = $filename;
        }

        $upload->save();

        return redirect()->back()->with('status', 'Product image added successfully');
    }
}

