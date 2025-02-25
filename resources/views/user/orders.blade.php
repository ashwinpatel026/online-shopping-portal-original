@extends('layouts.app')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{route('home.index')}}">Home</a></li>
				<li class='active'>User Orders</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content out-top-xs">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="shopping-cart">
                <div class="col-md-12 col-sm-12 shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">#</th>
                                    <th class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product Name</th>
                            
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Price Per unit</th>
                                    <th class="cart-total item">Grandtotal</th>
                                    <th class="cart-total item">Payment Method</th>
                                    <th class="cart-description item">Order Date</th>
                                </tr>
                            </thead><!-- /thead -->
                            @if($orders)
                                @foreach ($orders as $key => $order )
                                    <tr>
                                        <td>{{ $key + 1  }}</td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="{{ route('product.show', $order->product->id) }}">
                                                <img src="{{asset('products/'.$order->product->product_image1)}}" alt="" width="84" height="146">
                                            </a>
                                        </td>
                                        <td class="cart-product-name-info">
                                            <h4 class='cart-product-description'>
                                                <a href="{{ route('product.show', $order->product->id) }}">{{ $order->product->product_name }}</a>
                                            </h4>
                                        </td>
                                        <td class="cart-product-quantity">{{ $order->quantity }}</td>
                                        <td class="cart-product-sub-total">{{ $order->product->sale_price > 0 ? $order->product->sale_price : $order->product->price }}</td>
                                        <td class="cart-product-grand-total">{{ $order->product->sale_price > 0 ? $order->product->sale_price * $order->quantity : $order->product->price * $order->quantity }}</td>
                                        <td class="cart-product-sub-total">{{ $order->payment_method }}</td>
                                        <td class="cart-product-sub-total">{{ $order->created_at }} </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
