<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;



class SubcategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();

        return view('admin.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subcategory_name' => 'required|string|max:255',
            'subcategory_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
        ]);
    
        // Create the subcategory
        Subcategory::create([
            'subcategory_name' => $request->subcategory_name,
            'subcategory_description' => $request->subcategory_description,
            'category_id' => $request->category_id, // Associate with the selected category
        ]);
    
        return redirect()->route('subcategories.index')->with('success', 'Subcategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subcategory = Subcategory::with('category')->findOrFail($id);
        $categories = Category::all(); // For the category dropdown

        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'subcategory_name' => 'required|string|max:255',
            'subcategory_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Find the subcategory and update it
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->update([
            'subcategory_name' => $request->subcategory_name,
            'subcategory_description' => $request->subcategory_description,
            'category_id' => $request->category_id,
        ]);
    
        // Redirect with a success message
        return redirect()->route('subcategories.index')->with('success', 'Subcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        // Delete the subcategory
        $subcategory->delete();

        // Redirect back to the index with a success message
        return redirect()->route('subcategories.index')->with('success', 'Subcategory deleted successfully');
    }
}