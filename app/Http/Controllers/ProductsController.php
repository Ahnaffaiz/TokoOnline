<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('pages.admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'categories' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required',
            'details' => 'required|string|min:5|max:1000',
            'stock'=>'required|integer',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $imageName = time().'.'.$request->images->extension();  
        $request->images->move(public_path('images'), $imageName);
        
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->categories = $request->categories;
        $product->author = $request->author;
        $product->publisher = $request->publisher;
        $product->year = $request->year;
        $product->details = $request->details;
        $product->stock = $request->stock;
        $product->images = $imageName;

        $product->save();
        
        return redirect('/produk')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('pages.admin.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
