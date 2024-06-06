<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Brands;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

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
        $brands = Brands::all();
        return view('products.create', compact('brands'));
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
            'brand_id' => 'required|exists:brands,id',
        ]);

        Products::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'state' => $request->input('state'),
            'brand_id' => $request->input('brand_id'),
        ]);

        return redirect()->route('products.index')->with('success', 'The product has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        $brands = Brands::all();
      
        return view('products.show', compact('product', 'brands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $brands = Brands::all();
        return view('products.edit', compact('product', 'brands'));
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
            'brand_id' => 'required|exists:brands,id',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Successfully updated product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Successfully deleted product.');
    }
}