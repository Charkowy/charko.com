<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brands::all();
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',

        ]);
        
        Brands::create([
            'brand' => $request->input('brand'),
        ]);
        
        return redirect()->route('brands.index')->with('success', 'The brand has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brands $brand)
    {
        return view('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brands $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brands $brand)
    {
        $request->validate([
            'brand' => 'required',
        ]);
    
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('success', 'Successfully updated brand.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brands $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Successfully deleted brand.');
    }
}
