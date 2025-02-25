@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home.index')}}">Home</a></li>
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
                    @if ($items->count() > 0)
                    <div class="table-responsive">
                        <table class="table-bordered table">
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
                                @foreach ($items as $item)
                                <tr>
                                    <td class="romove-item">
                                        <form action="{{ route('cart.remove', ['rowId' => $item->rowId]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="remove-cart" href="javascript:void(0)"><i
                                                    class="fa fa-remove text-danger"></i></a>
                                        </form>
                                    </td>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="#">
                                            <img src="{{ asset('products/' . $item->model->product_image1) }}" alt=""
                                                width="114" height="146">

                                        </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class="cart-product-description">{{ $item->name }}</h4>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quant-input">
                                            <div class="arrows">
                                                <form
                                                    action="{{ route('cart.qty.increase', ['rowId' => $item->rowId]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        style="background: transparent; border: none;">
                                                        <div class="arrow plus gradient" id="plus-qty">
                                                            <span class="ir">
                                                                <i class="icon fa fa-sort-asc"></i>
                                                            </span>
                                                        </div>
                                                    </button>
                                                </form>
                                                <form
                                                    action="{{ route('cart.qty.decrease', ['rowId' => $item->rowId]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        style="background: transparent; border: none;">
                                                        <div class="arrow minus gradient">
                                                            <span class="ir">
                                                                <i class="icon fa fa-sort-desc" id="minus-qty"></i>
                                                            </span>
                                                        </div>
                                                    </button>
                                                </form>
                                            </div>
                                            <input name="quantity[15]" type="text" value="{{ $item->qty }}">
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rs
                                            {{ $item->price }}</span></td>
                                    <td class="cart-product-grand-total"><span
                                            class="cart-grand-total-price">{{ $item->subtotal() }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn">
                                            <span class="">
                                                <a class="btn btn-upper btn-primary outer-left-xs"
                                                    href="{{ route('home.index') }}">Continue Shopping</a>
                                            </span>
                                        </div><!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    @else
                    <div class="alert alert-danger">Your Shopping Cart is empty</div>
                    <a class="btn btn-primary" href="{{ route('home.index') }}">Continue Shopping</a>
                    @endif
                </div>
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <span class="estimate-title">Billing Address</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        @auth
                                        <form action="{{ route('cart.update.billing',Auth::user()->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="info-title" for="Billing Address">Billing
                                                    Address<span>*</span></label>
                                                <textarea class="form-control unicase-form-control text-input"
                                                    name="billingaddress"
                                                    required="required">{{ Auth::user()->billing_address }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Billing State ">Billing State
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="bilingstate" name="bilingstate"
                                                    value="{{ Auth::user()->billing_state }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Billing City">Billing City
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="billingcity" name="billingcity" required="required"
                                                    value="{{ Auth::user()->billing_city }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Billing Pincode">Billing Pincode
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="billingpincode" name="billingpincode" required="required"
                                                    value="{{ Auth::user()->billing_pincode }}">
                                            </div>
                                            <button type="submit" name="update"
                                                class="btn-upper btn btn-primary checkout-page-button">Update</button>
                                        </form>

                                        @endauth
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <span class="estimate-title">Shipping Address</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        @auth
                                        <form action="{{ route('cart.update.shipping',Auth::user()->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="info-title" for="Shipping Address">Shipping
                                                    Address<span>*</span></label>
                                                <textarea class="form-control unicase-form-control text-input"
                                                    name="shipping_address"
                                                    required="required">{{ Auth::user()->shipping_address }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Shipping State ">Shipping State
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shipping_state" name="shipping_state"
                                                    value="{{ Auth::user()->shipping_state }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Shipping City">Shipping City
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shipping_city" name="shipping_city" required="required"
                                                    value="{{ Auth::user()->shipping_city }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="Shipping Pincode">Shipping Pincode
                                                    <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shipping_pincode" name="shipping_pincode" required="required"
                                                    value="{{ Auth::user()->shipping_pincode }}">
                                            </div>
                                            <button type="submit" name="update"
                                                class="btn-upper btn btn-primary checkout-page-button">Update Shipping</button>
                                        </form>

                                        @endauth
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4 cart-shopping-total">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th>

                                    <div class="cart-grand-total">
                                        Grand Total<span
                                            class="inner-left-md">{{ Cart::instance('cart')->subtotal() }}</span>
                                    </div>
                                </th>
                            </tr>
                        </thead><!-- /thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <a class="btn btn-primary" name="ordersubmit" id="checkout-btn"
                                            href="{{ route('checkout') }}">PROCCED TO CHEKOUT</a>

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
        $(this).closest('form').submit(); // Submit the form
    });

    $('#minus-qty').on('click', function(e) {
        e.preventDefault();
        $(this).closest('form').submit();
    });
    $('.remove-cart').on('click', function(e) {
        $(this).closest('form').submit();
    });
});
document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("checkout-btn").addEventListener("click", function (event) {
            let shippingAddress = document.querySelector("textarea[name='shipping_address']").value.trim();
            let shippingState = document.querySelector("input[name='shipping_state']").value.trim();
            let shippingCity = document.querySelector("input[name='shipping_city']").value.trim();
            let shippingPincode = document.querySelector("input[name='shipping_pincode']").value.trim();

            let billingAddress = document.querySelector("textarea[name='billingaddress']").value.trim();
            let billingState = document.querySelector("input[name='bilingstate']").value.trim();
            let billingCity = document.querySelector("input[name='billingcity']").value.trim();
            let billingPincode = document.querySelector("input[name='billingpincode']").value.trim();

            if (!shippingAddress || !shippingState || !shippingCity || !shippingPincode) {
                alert("Please fill in all shipping details before proceeding to checkout.");
                event.preventDefault(); // Stop redirection
            }

            if (!billingAddress || !billingState || !billingCity || !billingPincode) {
                alert("Please fill in all billing details before proceeding to checkout.");
                event.preventDefault(); // Stop redirection
            }
        });
    });
</script>
@endpush