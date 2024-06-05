<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Upload; 
use DB;

class UploadController extends Controller
{
    // public function index()
    // {
        
    //     $products = Upload::all(); // Fetch all products from the database
    //     return view('frontend.product_list', compact('products'));
    // }
    // public function index()
    // {
    //     try {
    //         Log::info('Attempting to fetch all products.');
    //         $products = Upload::all();
    //         Log::info('Products fetched successfully.', ['products' => $products]);
    //         if ($products->isEmpty()) {
    //             Log::info('No products found.');
    //             return view('frontend.menu.product_list')->with('message', 'No products found.');
    //         }

    //         // Return view with products
    //         // return view('frontend.menu.product_list', compact('products'));
    //         return view('frontend.menu.product_list')->with('product', $products);

    //     } catch (\Exception $e) {
    //         // Log the error
    //         Log::error('Error fetching products: ' . $e->getMessage());

    //         // Optionally, you can return a view with an error message
    //         return view('frontend.menu.product_list')->with('error', 'Unable to retrieve products at this time.');
    //     }
    // }
    public function index()
    {
        $prod = Upload::all();
        dd($prod);
        return view('frontend.menu.product_list', compact('prod'));
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

?>