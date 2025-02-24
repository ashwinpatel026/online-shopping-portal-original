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
                            <input class="span8 tip" name="category_name" type="text" value="{{ old('category_name') }}"
                                placeholder="Enter category Name" required>
                            <!-- Display Validation Errors -->
                            @error('category_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description</label>
                        <div class="controls">
                            <textarea class="span8" name="category_description" required rows="5">{{ old('category_description') }}</textarea>
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
