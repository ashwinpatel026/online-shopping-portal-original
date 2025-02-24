@extends('admin.layouts.app')

@section('content')
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Edit Subcategory</h3>
            </div>
            <div class="module-body">
                <!-- Form to Edit Subcategory -->
                <form class="form-horizontal row-fluid" name="Subcategory" method="POST" action="{{ route('subcategories.update', $subcategory->id) }}">
                    @csrf <!-- CSRF Token -->
                    @method('PUT') <!-- PUT Method for Update -->

                    <div class="control-group">
                        <label class="control-label" for="category_id">Category</label>
                        <div class="controls">
                            <select name="category_id" class="span8" required>
                                <option value="" disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="subcategory_name">Subcategory Name</label>
                        <div class="controls">
                            <input type="text" 
                                   placeholder="Enter Subcategory Name" 
                                   name="subcategory_name" 
                                   class="span8 tip" 
                                   required
                                   value="{{ old('subcategory_name', $subcategory->subcategory_name) }}">
                            @error('subcategory_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="subcategory_description">Description</label>
                        <div class="controls">
                            <textarea class="span8" 
                                      name="subcategory_description" 
                                      rows="5">{{ old('subcategory_description', $subcategory->subcategory_description) }}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
