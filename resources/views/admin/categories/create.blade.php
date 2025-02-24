@extends('admin.layouts.app')

@section('content')
    <!-- resources/views/admin/categories/create.blade.php -->

<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Category</h3>
        </div>
        <div class="module-body">
            <!-- Form to Add Category -->
            <form class="form-horizontal row-fluid" name="Category" method="POST" action="{{ route('categories.store') }}">
                @csrf <!-- CSRF Token -->

                <div class="control-group">
                    <label class="control-label" for="basicinput">Category Name</label>
                    <div class="controls">
                        <input type="text" 
                               placeholder="Enter category Name" 
                               name="category_name" 
                               class="span8 tip" 
                               required
                               value="{{ old('category_name') }}">
                        <!-- Display Validation Errors -->
                        @error('category_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Description</label>
                    <div class="controls">
                        <textarea class="span8" 
                                  name="category_description" 
                                  rows="5">{{ old('category_description') }}</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
