<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;

class CategoriesController extends Controller
{
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $categories = categories::all();
            return view('categories.index', compact('categories'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
 
            $categories = categories::all();
            return view('categories.create', compact('categories'));
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'parent_id' => 'required',  // Marcar como requerido
            ]);
        
            $data = $request->all();
            if ($data['parent_id'] === 'null' || $data['parent_id'] === '') {
                $data['parent_id'] = null;
            }

        
            categories::create([
                'name' => $request->input('name'),
                'parent_id' => $data['parent_id'],
            ]);
            
            return redirect()->route('categories.index')->with('success', 'The category has been successfully created.');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(categories $category)
        {
            $categories = categories::all();
            return view('categories.show', compact('category', 'categories'));
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(categories $category)
        {
            $categories = categories::all();
            return view('categories.edit', compact('category', 'categories'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, categories $category)
        {
            $request->validate([
                'name' => 'required',
                'parent_id' => 'required',  // Marcar como requerido
            ]);
        
            $data = $request->all();
            if ($data['parent_id'] === 'null' || $data['parent_id'] === '') {
                $data['parent_id'] = null;
            }
        
            $category->update($data);
            return redirect()->route('categories.index')->with('success', 'Successfully updated category.');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(categories $category)
        {
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Successfully deleted category.');
        }
    }
