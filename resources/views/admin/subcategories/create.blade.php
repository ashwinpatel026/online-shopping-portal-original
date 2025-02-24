@extends('admin.layouts.app')

@section('content')
    <!-- resources/views/admin/categories/create.blade.php -->

    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Add Sub-Category</h3>
            </div>
            <div class="module-body">
                <!-- Form to Add Category -->
                <form class="form-horizontal row-fluid" name="Category" method="POST"
                    action="{{ route('subcategories.store') }}">
                    @csrf <!-- CSRF Token -->

                    <div class="control-group">
                        <label class="control-label" for="category">Category</label>
                        <div class="controls">
                            <select class="span8" name="category_id" required>
                                <option value="" disabled selected>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Display Validation Errors for category -->
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Category Name</label>
                        <div class="controls">
                            <input class="span8 tip" name="subcategory_name" type="text"
                                value="{{ old('subcategory_name') }}" placeholder="Enter Sub category Name" required>
                            <!-- Display Validation Errors -->
                            @error('subcategory_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description</label>
                        <div class="controls">
                            <textarea class="span8" name="subcategory_description" required rows="5">{{ old('subcategory_description') }}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button class="btn btn-primary" name="submit" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
