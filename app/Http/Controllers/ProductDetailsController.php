<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category; // Import the Category model


use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);

        // Fetch related products in the same category, excluding the current product
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $id)
                                  ->limit(4)
                                  ->get();

        $categories = Category::all();
        return view('product_details', compact('product', 'relatedProducts','categories'));
    }
}