<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
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
      
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'state' => 'required',
        ]);
        
        Products::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'state' => $request->input('state'),
        ]);
        
        return redirect()->route('products.index')->with('success', 'The product has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {

        return view('products.show', compact('product'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'state' => 'required',
        ]);
    
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Successfully updated product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Successfully deleted product.');
    }
}