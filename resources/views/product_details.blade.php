@extends('layouts.app')

@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li>Electronics</li>
                    <li>Mobiles</li>
                    <li class="active">Apple iPhone 6 (Silver, 16 GB)</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>
    <div class="m-t-20 container">
        <div class="row single-product outer-bottom-sm">
            <div class="col-md-3 sidebar">
                <div class="sidebar-module-container">
                    <div class="sidebar-widget outer-bottom-xs wow fadeInUp animated">
                        <h3 class="section-title">Category</h3>
                        <div class="sidebar-widget-body m-t-10">

                            <div class="accordion">
                                @if ($categories)
                                    @foreach ($categories as $category)
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle collapsed"
                                                    href="{{ route('category.show', ['categoryId' => $category->id]) }}">
                                                    {{ $category->category_name }} </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row wow fadeInUp">
                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-lightbox="image-1" data-title="{{ $product->product_name }}"
                                        href="{{ asset('products/' . $product->product_image1) }}">
                                        <img class="img-responsive"
                                            data-echo="{{ asset('products/' . $product->product_image1) }}"
                                            src="{{ asset('assets/images/blank.gif') }}" alt="" width="370"
                                            height="350" />
                                    </a>
                                </div>
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-lightbox="image-1" data-title="{{ $product->product_name }}"
                                        href="{{ asset('products/' . $product->product_image1) }}">
                                        <img class="img-responsive"
                                            data-echo="{{ asset('products/' . $product->product_image1) }}"
                                            src="{{ asset('assets/images/blank.gif') }}" alt="" width="370"
                                            height="350" />
                                    </a>
                                </div>

                                <div class="single-product-gallery-item" id="slide2">
                                    <a data-lightbox="image-1" data-title="{{ $product->product_name }}"
                                        href="{{ asset('products/' . $product->product_image2) }}">
                                        <img class="img-responsive"
                                            data-echo="{{ asset('products/' . $product->product_image2) }}"
                                            src="{{ asset('assets/images/blank.gif') }}" alt="" width="370"
                                            height="350" />
                                    </a>
                                </div>
                            </div>
                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1"
                                            href="#slide1">
                                            <img class="img-responsive"
                                                data-echo="{{ asset('products/' . $product->product_image1) }}"
                                                src="{{ asset('assets/images/blank.gif') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="2"
                                            href="#slide2">
                                            <img class="img-responsive"
                                                data-echo="{{ asset('products/' . $product->product_image2) }}"
                                                src="{{ asset('assets/images/blank.gif') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="3"
                                            href="#slide3">
                                            <img class="img-responsive"
                                                data-echo="{{ asset('products/' . $product->product_image3) }}"
                                                src="{{ asset('assets/images/blank.gif') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-6 col-md-7 product-info-block'>
                        <div class="product-info">
                            <h1 class="name">{{ $product->product_name }}</h1>
                            <div class="rating-reviews m-t-20">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="rating rateit-small"></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="reviews">
                                            <a class="lnk" href="#">(2756 Reviews)</a>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="stock-box">
                                            <span class="label">Availability :</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="stock-box">
                                            <span class="value">{{ $product->product_availability }}</span>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="stock-box">
                                            <span class="label">Product Brand :</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="stock-box">
                                            <span class="value">{{ $product->product_brand }}</span>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="stock-box">
                                            <span class="label">Shipping Charge :</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="stock-box">
                                            @if ($product->shipping_charge <= 0)
                                                <span class="value">Free</span>
                                            @else
                                                <span class="value">{{ $product->shipping_charge }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                            <div class="price-container info-container m-t-20">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="price-box">
                                            <span class="price">Rs.{{ $product->price }}</span>
                                            <span class="price-strike">Rs.{{ $product->sale_price }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="favorite-button m-t-10">
                                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                href="#" title="Wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.price-container -->
                            <div class="quantity-container info-container">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <span class="label">Qty :</span>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="cart-quantity">
                                            <div class="quant-input">
                                                <div class="arrows">
                                                    <div class="arrow plus gradient"><span class="ir"><i
                                                                class="icon fa fa-sort-asc"></i></span></div>
                                                    <div class="arrow minus gradient"><span class="ir"><i
                                                                class="icon fa fa-sort-desc"></i></span></div>
                                                </div>
                                                <input id="product-qty" name="quantity" type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        @if ($product->product_availability === 'in-stock')
                                            <div class="action">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input name="id" type="hidden" value="{{ $product->id }}">
                                                    <input name="product_name" type="hidden"
                                                        value="{{ $product->product_name }}">
                                                    <input name="price" type="hidden"
                                                        value="{{ $product->sale_price > 0 ? $product->sale_price : $product->price }}">
                                                    <input id="form-quantity" name="quantity" type="hidden"
                                                        value="1">
                                                    <button class="add-to-cart-mt lnk btn btn-info" type="submit">Add to
                                                        Cart</button>
                                                </form>
                                            </div>
                                        @else
                                            <div class="action" style="color:red">Out of Stock</div>
                                        @endif
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.quantity-container -->
                        </div>
                    </div>
                </div>
                {{-- review and description --}}
                <div class="product-tabs inner-bottom-xs wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul class="nav nav-tabs nav-tab-cell" id="product-tabs">
                                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane in active" id="description">
                                    <div class="product-tab">
                                        <p class="text">{{ $product->product_description }}</p>
                                    </div>
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="review">
                                    <div class="product-tab">

                                        <div class="product-reviews">
                                            <h4 class="title">Customer Reviews</h4>
                                            <!-- /.reviews -->
                                        </div><!-- /.product-reviews -->
                                        <form class="cnt-form" name="review" role="form" method="post">
                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table-bordered table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td><input class="radio" name="quality"
                                                                            type="radio" value="1"></td>
                                                                    <td><input class="radio" name="quality"
                                                                            type="radio" value="2"></td>
                                                                    <td><input class="radio" name="quality"
                                                                            type="radio" value="3"></td>
                                                                    <td><input class="radio" name="quality"
                                                                            type="radio" value="4"></td>
                                                                    <td><input class="radio" name="quality"
                                                                            type="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td><input class="radio" name="price"
                                                                            type="radio" value="1"></td>
                                                                    <td><input class="radio" name="price"
                                                                            type="radio" value="2"></td>
                                                                    <td><input class="radio" name="price"
                                                                            type="radio" value="3"></td>
                                                                    <td><input class="radio" name="price"
                                                                            type="radio" value="4"></td>
                                                                    <td><input class="radio" name="price"
                                                                            type="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td><input class="radio" name="value"
                                                                            type="radio" value="1"></td>
                                                                    <td><input class="radio" name="value"
                                                                            type="radio" value="2"></td>
                                                                    <td><input class="radio" name="value"
                                                                            type="radio" value="3"></td>
                                                                    <td><input class="radio" name="value"
                                                                            type="radio" value="4"></td>
                                                                    <td><input class="radio" name="value"
                                                                            type="radio" value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->
                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputName">Your Name <span
                                                                            class="astk">*</span></label>
                                                                    <input class="form-control txt" id="exampleInputName"
                                                                        name="name" type="text" placeholder=""
                                                                        required="required">
                                                                </div><!-- /.form-group -->
                                                                <div class="form-group">
                                                                    <label for="exampleInputSummary">Summary <span
                                                                            class="astk">*</span></label>
                                                                    <input class="form-control txt"
                                                                        id="exampleInputSummary" name="summary"
                                                                        type="text" placeholder=""
                                                                        required="required">
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputReview">Review <span
                                                                            class="astk">*</span></label>
                                                                    <textarea class="form-control txt txt-review" id="exampleInputReview" name="review" rows="4" placeholder=""
                                                                        required="required"></textarea>
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                        </div><!-- /.row -->
                                                        <div class="action text-right">
                                                            <button class="btn btn-primary btn-upper"
                                                                name="submit">SUBMIT
                                                                REVIEW</button>
                                                        </div><!-- /.action -->

                                        </form><!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                </div><!-- /.review-form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- related products --}}
        <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">Realted Products </h3>
            <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                @if ($relatedProducts->count() > 0)
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{ route('product.show', $relatedProduct->id) }}">
                                                <img data-echo="{{ asset('products/' . $relatedProduct->product_image1) }}"
                                                    src="assets/images/blank.gif" alt="" width="150"
                                                    height="240">
                                            </a>
                                        </div><!-- /.image -->
                                    </div>
                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <a
                                                href="{{ route('product.show', $relatedProduct->id) }}">{{ $relatedProduct->product_name }}</a>
                                        </h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
                                                Rs.{{ $relatedProduct->price }} </span>
                                            <span
                                                class="price-before-discount">Rs.{{ $relatedProduct->sale_price }}</span>
                                        </div><!-- /.product-price -->
                                    </div><!-- /.product-info -->
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let quantityInput = document.getElementById("product-qty");
            let formQuantity = document.getElementById("form-quantity");
            let plusBtn = document.querySelector(".arrow.plus");
            let minusBtn = document.querySelector(".arrow.minus");

            // Remove existing event listeners (if any) before adding new ones
            plusBtn.replaceWith(plusBtn.cloneNode(true));
            minusBtn.replaceWith(minusBtn.cloneNode(true));

            // Re-select elements after replacing
            plusBtn = document.querySelector(".arrow.plus");
            minusBtn = document.querySelector(".arrow.minus");

            plusBtn.addEventListener("click", function(event) {
                event.stopImmediatePropagation(); // Prevent double execution
                let qty = parseInt(quantityInput.value) || 1;
                quantityInput.value = qty + 1;
                formQuantity.value = qty + 1;
            });

            minusBtn.addEventListener("click", function(event) {
                event.stopImmediatePropagation(); // Prevent double execution
                let qty = parseInt(quantityInput.value) || 1;
                if (qty > 1) {
                    quantityInput.value = qty - 1;
                    formQuantity.value = qty - 1;
                }
            });

            // Sync quantity when manually changed
            quantityInput.addEventListener("input", function() {
                let qty = parseInt(quantityInput.value);
                if (!isNaN(qty) && qty > 0) {
                    formQuantity.value = qty;
                } else {
                    quantityInput.value = 1;
                    formQuantity.value = 1;
                }
            });
        });
    </script>
@endpush
