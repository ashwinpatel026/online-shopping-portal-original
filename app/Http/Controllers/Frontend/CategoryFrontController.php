<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;  // Import the Product model
use App\Models\Category; // Import the Category model
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcategory; // Import the Subcategory model

class CategoryFrontController extends Controller
{
    //
    public function show($categoryId)
    {
        // Retrieve the category based on the ID
        $category = Category::findOrFail($categoryId);

        $categories = Category::all();
        $subcategories = Subcategory::where('category_id', $categoryId)->get();

        // Retrieve products based on the category
        $products = Product::where('category_id', $categoryId)->get();

        // Pass the category and products to the view
        return view('frontend.category.show', compact('category', 'products','subcategories','categories'));
    }
}