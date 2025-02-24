@extends('admin.layouts.app')

@section('content')

<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Manage Sub-Category</h3>
        </div>
        <div class="module-body">
            <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add Sub-Category</a>
        </div>
        <div class="module-body table">
             <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            <br />
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sub-Category Name</th>
                        <th>Category Name</th>
                        <th>Reg. Date </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $index => $subcategory)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $subcategory->subcategory_name }}</td>
                            <td>{{ $subcategory->category->category_name }}</td>
                            <td>{{ $subcategory->created_at }}</td>
                            <td>
                                <!-- Edit Action -->
                                <a href="{{ route('subcategories.edit', $subcategory->id) }}">
                                    <i class="icon-edit"></i>
                                </a>

                                <!-- Delete Action with Confirmation -->
                                <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this category?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="icon-remove-sign"></i>
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

