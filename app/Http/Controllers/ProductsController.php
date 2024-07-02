<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Brands;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = Products::query();

        if ($request->has('order')) {
            $query->orderBy('price', $request->order);
        }

        $products  = $query->paginate(3);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Products();
        $brands = Brands::all();
        $categories = categories::all();
        return view('products.create', compact('brands', 'categories', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $validatedData = $request->validated();
        $product = new Products();
        if ($request->has('add_taxes') && $request->input('add_taxes')) {
            $validatedData['price'] = $product->priceWithTax($validatedData['price']);
        }
        $product = Products::create($validatedData);

        $product->categories()->sync($request->category_id);

        return redirect()->route('products.index')->with('success', 'The product has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        $brands = Brands::all();
        $product = Products::with('categories')->findOrFail($product->id);
        $categories = $product->categories; // Solo las categorías asociadas al producto
        return view('products.show', compact('product', 'brands', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $brands = Brands::all();
        $categories = categories::all();
        return view('products.edit', compact('product', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductsRequest $request, Products $product)
    {
        $validatedData = $request->validated();
 
        $product = Products::findOrFail($product->id);
    
        if ($request->has('add_taxes') && $request->input('add_taxes')) {
            $validatedData['price'] = $product->priceWithTax($validatedData['price']);
        }
        
        $product->update($validatedData);
    
        $product->categories()->sync($request->category_id);
    

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