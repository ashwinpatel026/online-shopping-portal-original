@extends('admin.layouts.app')

@section('content')

<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Product</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="control-group">
                    <label class="control-label" for="category">Category</label>
                    <div class="controls">
                        <select name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
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
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <div class="controls">
                        <input type="text" name="product_name" placeholder="Enter product name" value="{{ old('product_name') }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_brand">Product Brand</label>
                    <div class="controls">
                        <input type="text" name="product_brand" placeholder="Enter product brand" value="{{ old('product_brand') }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="price">Price</label>
                    <div class="controls">
                        <input type="number" name="price" placeholder="Enter price" value="{{ old('price') }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="sale_price">Sale Price</label>
                    <div class="controls">
                        <input type="number" name="sale_price" placeholder="Enter sale price" value="{{ old('sale_price') }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_description">Product Description</label>
                    <div class="controls">
                        <textarea name="product_description" rows="5" required>{{ old('product_description') }}</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="shipping_charge">Shipping Charge</label>
                    <div class="controls">
                        <input type="number" name="shipping_charge" placeholder="Enter shipping charge" value="{{ old('shipping_charge') }}" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_availability">Product Availability</label>
                    <div class="controls">
                        <select name="product_availability" required>
                            <option value="in-stock" {{ old('product_availability') == 'in-stock' ? 'selected' : '' }}>In Stock</option>
                            <option value="out-of-stock" {{ old('product_availability') == 'out-of-stock' ? 'selected' : '' }}>Out of Stock</option>
                        </select>
                        @error('product_availability')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Image Upload Fields -->
                <div class="control-group">
                    <label class="control-label" for="product_image1">Product Image 1</label>
                    <div class="controls">
                        <input type="file" name="product_image1" accept="image/*">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_image2">Product Image 2</label>
                    <div class="controls">
                        <input type="file" name="product_image2" accept="image/*">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="product_image3">Product Image 3</label>
                    <div class="controls">
                        <input type="file" name="product_image3" accept="image/*">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
