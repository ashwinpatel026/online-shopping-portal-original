@extends('layouts.app')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content out-top-xs">
    <div class="container">
        <div class="row inner-bottom-sm">
            <div class="shopping-cart">
                <div class="col-md-12 col-sm-12 shopping-cart-table">
                    @if($items->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">Remove</th>
                                    <th class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product Name</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Price Per unit</th>
                                    <th class="cart-total last-item">Grandtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item )
                                <tr>
                                    <td class="romove-item">
                                        <form action="{{ route('cart.remove', ['rowId' => $item->rowId]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <a href="javascript:void(0)" class="remove-cart"><i class="fa fa-remove text-danger " ></i></a>
                                        </form>
                                    </td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="#">
                                            <img src="{{ asset('products/'.$item->model->product_image1) }}" alt="" width="114" height="146">

                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class="cart-product-description">{{ $item->name }}</h4>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quant-input">
                                                <div class="arrows">
                                                    <form action="{{ route('cart.qty.increase', ['rowId' => $item->rowId]) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" style="background: transparent; border: none;">
                                                            <div class="arrow plus gradient" id="plus-qty">
                                                                <span class="ir">
                                                                    <i class="icon fa fa-sort-asc" ></i>
                                                                </span>
                                                            </div>
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('cart.qty.decrease', ['rowId' => $item->rowId]) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" style="background: transparent; border: none;">
                                                            <div class="arrow minus gradient">
                                                                <span class="ir">
                                                                    <i class="icon fa fa-sort-desc" id="minus-qty"></i>
                                                                </span>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                                <input type="text" value="{{ $item->qty }}" name="quantity[15]">
                                            </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rs {{$item->price }}</span></td>
                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ $item->subtotal() }}</span></td>
                                </tr> 
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a href="{{route('home.index')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-danger">Your Shopping Cart is empty</div>
                    <a href="{{route('home.index')}}" class="btn btn-primary">Continue Shopping</a>
                    @endif
                </div>
                <div class="col-md-12 col-sm-12 cart-shopping-total">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    
                                    <div class="cart-grand-total">
                                        Grand Total<span class="inner-left-md">{{ Cart::instance('cart')->subtotal() }}</span>
                                    </div>
                                </th>
                            </tr>
                        </thead><!-- /thead -->
                        <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit" name="ordersubmit" class="btn btn-primary">PROCCED TO CHEKOUT</button>
                                        
                                        </div>
                                    </td>
                                </tr>
                        </tbody><!-- /tbody -->
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function() {
    $('#plus-qty').on('click', function(e) {
        $(this).closest('form').submit();  // Submit the form
    });
    
    $('#minus-qty').on('click', function(e) {
        e.preventDefault();
        $(this).closest('form').submit();
    });
    $('.remove-cart').on('click', function(e) {
        $(this).closest('form').submit(); 
    });
});

</script>
@endpush
