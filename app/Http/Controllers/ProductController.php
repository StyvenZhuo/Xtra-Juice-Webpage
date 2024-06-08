<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

    // Check if there's a file uploaded
    if ($request->hasFile('pic')) {
        $file = $request->file('pic');

        // Generate a unique filename
        $filename = date('YmdHi') . $file->getClientOriginalName();

        // Move the uploaded file to the desired location
        $file->move(public_path('storage/images/upload'), $filename);

        // Assign the filename to the 'pic' attribute in the data array
        $data['pic'] = $filename;
    }

    // Create a new product using the data array
    Product::create($data);

    return redirect()->route('products')->with('success', 'Product added successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
 
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
 
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->except('pic');
    
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('storage/images/upload'), $filename);
            $data['pic'] = $filename;
        }
    
        $product->update($data);
 
        return redirect()->route('products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
 
        $product->delete();
 
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }

    public function showMenuBv()
    {
        // Fetch products where id_product contains 'BV'
        $Bvproduct = Product::where('id_product', 'LIKE', '%BV%')->get();
        return view('menu', compact('Bvproducts'));
    }

    public function showMenuFd()
    {
        // Fetch products where id_product contains 'FD'
        $Fdproduct = Product::where('id_product', 'LIKE', '%FD%')->get();
        return view('menu', compact('Fdproducts'));
    }
}
