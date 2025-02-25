@extends('admin.layouts.app')

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Orders</h3>
        </div>
        <div class="module-body table">
            <!-- Display Success Message -->
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email/Contact no</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Order Status</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index => $order)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->user->email }} / {{$order->user->contact_no}}</td>
                            <td>{{ $order->product->product_name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->created_at }}</td>
                            
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

