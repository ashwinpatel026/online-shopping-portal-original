@extends('admin.layouts.app')

@section('content')

<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Edit Product</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="control-group">
                    <label class="control-label" for="category">Category</label>
                    <div class="controls">
                        <select name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="subcategory">Subcategory</label>
                    <div class="controls">
                        <select name="subcategory_id" required>
                            <option value="">Select Subcategory</option>
                            @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                    {{ $subcategory->subcategory_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <div class="controls">
                        <input type="text" name="product_name" value="{{ $product->product_name }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_brand">Product Brand</label>
                    <div class="controls">
                        <input type="text" name="product_brand" value="{{ $product->product_brand }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="price">Price</label>
                    <div class="controls">
                        <input type="number" name="price" value="{{ $product->price }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="sale_price">Sale Price</label>
                    <div class="controls">
                        <input type="number" name="sale_price" value="{{ $product->sale_price }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_description">Product Description</label>
                    <div class="controls">
                        <textarea name="product_description" rows="5" required>{{ $product->product_description }}</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="shipping_charge">Shipping Charge</label>
                    <div class="controls">
                        <input type="number" name="shipping_charge" value="{{ $product->shipping_charge }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Product Availability</label>
                    <div class="controls">
                        <select name="product_availability" required>
                            <option value="in-stock" {{ $product->product_availability == 'in-stock' ? 'selected' : '' }}>In Stock</option>
                            <option value="out-of-stock" {{ $product->product_availability == 'out-of-stock' ? 'selected' : '' }}>Out of Stock</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Product Images</label>
                    <div class="controls">
                        <input type="file" name="product_image1">
                        @if($product->product_image1)
                            <img src="{{ asset('products/' . $product->product_image1) }}" width="100">
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Product Images2</label>
                    <div class="controls">
                        <input type="file" name="product_image2">
                        @if($product->product_image2)
                            <img src="{{ asset('products/' . $product->product_image2) }}" width="100">
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Product Images3</label>
                    <div class="controls">
                        <input type="file" name="product_image3">
                        @if($product->product_image3)
                            <img src="{{ asset('products/' . $product->product_image3) }}" width="100">
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
