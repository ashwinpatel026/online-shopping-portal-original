@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Product List</h3>
        </div>
        <div class="module-body">
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add New Product Button -->
            {{-- <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a> --}}

            <!-- Product Table -->
            <table class="datatable-1 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Product Name</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                        <th>Shipping Charge</th>
                        <th>Availability</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->category->category_name ?? 'N/A' }}</td>
                            <td>{{ $product->subcategory->subcategory_name ?? 'N/A' }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_brand }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>${{ number_format($product->sale_price, 2) }}</td>
                            <td>${{ number_format($product->shipping_charge, 2) }}</td>
                            <td>{{ ucfirst($product->product_availability) }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}"><i class="icon-edit"></i></a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="icon-remove-sign text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    });
</script>
@endpush
@endsection
