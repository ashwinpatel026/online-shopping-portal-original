<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category', 'subcategory')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.products.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'product_name' => 'required|string|max:255',
            'product_brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'product_description' => 'required|string',
            'shipping_charge' => 'required|numeric',
            'product_availability' => 'required|in:in-stock,out-of-stock',
            'product_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['product_image1', 'product_image2', 'product_image3']);

        // Ensure the directory exists
        $destinationPath = public_path('products');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        if ($request->hasFile('product_image1')) {
            $file = $request->file('product_image1');
            $filename = time() . '_1.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $data['product_image1'] = $filename;
        }

        if ($request->hasFile('product_image2')) {
            $file = $request->file('product_image2');
            $filename = time() . '_2.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $data['product_image2'] = $filename;
        }

        if ($request->hasFile('product_image3')) {
            $file = $request->file('product_image3');
            $filename = time() . '_3.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);
            $data['product_image3'] = $filename;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
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
        $product = Product::findOrFail($id); // Fetch product by ID
        $categories = Category::all(); // Fetch all categories
        $subcategories = Subcategory::all(); // Fetch all subcategories

        return view('admin.products.edit', compact('product', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'product_name' => 'required|string|max:255',
            'product_brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'product_description' => 'required|string',
            'shipping_charge' => 'required|numeric',
            'product_availability' => 'required|in:in-stock,out-of-stock',
            'product_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->product_name = $request->product_name;
        $product->product_brand = $request->product_brand;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->product_description = $request->product_description;
        $product->shipping_charge = $request->shipping_charge;
        $product->product_availability = $request->product_availability;

        // Handle product images
        if ($request->hasFile('product_image1')) {
            $imageName1 = time() . '_1.' . $request->product_image1->extension();
            $request->product_image1->move(public_path('products'), $imageName1);
            $product->product_image1 = $imageName1;
        }

        if ($request->hasFile('product_image2')) {
            $imageName2 = time() . '_2.' . $request->product_image2->extension();
            $request->product_image2->move(public_path('products'), $imageName2);
            $product->product_image2 = $imageName2;
        }

        if ($request->hasFile('product_image3')) {
            $imageName3 = time() . '_3.' . $request->product_image3->extension();
            $request->product_image3->move(public_path('products'), $imageName3);
            $product->product_image3 = $imageName3;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id); // Find product by ID

        // Delete images from public/products folder
        if ($product->product_image1 && file_exists(public_path('products/' . $product->product_image1))) {
            unlink(public_path('products/' . $product->product_image1));
        }
        if ($product->product_image2 && file_exists(public_path('products/' . $product->product_image2))) {
            unlink(public_path('products/' . $product->product_image2));
        }
        if ($product->product_image3 && file_exists(public_path('products/' . $product->product_image3))) {
            unlink(public_path('products/' . $product->product_image3));
        }

        $product->delete(); // Delete product from database

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

}