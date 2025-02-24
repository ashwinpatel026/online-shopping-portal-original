@extends('layouts.app')

@section('content')
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="furniture-container homepage-container">
                <!-- row start -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                        <!-- ================================== TOP NAVIGATION ================================== -->
                        <div class="side-menu animate-dropdown outer-bottom-xs">
                            <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                            <nav class="yamm megamenu-horizontal" role="navigation">

                                <ul class="nav">
                                    
                                    
                                    <li class="dropdown menu-item">
                                        @if (isset($categories))
                                            @foreach ($categories as $cat )
                                                <a class="dropdown-toggle" href="{{ route('category.show', ['categoryId' => $cat->id]) }}">
                                                    <i class="icon fa fa-desktop fa-fw"></i>
                                                    {{ $cat->category_name }}</a>
                                            @endforeach
                                        @endif
                                        
                                        {{-- <a class="dropdown-toggle" href="category.php?cid=4"><i
                                                class="icon fa fa-desktop fa-fw"></i>
                                            Electronics</a>
                                        <a class="dropdown-toggle" href="category.php?cid=5"><i
                                                class="icon fa fa-desktop fa-fw"></i>
                                            Furniture</a>
                                        <a class="dropdown-toggle" href="category.php?cid=6"><i
                                                class="icon fa fa-desktop fa-fw"></i>
                                            Fashion</a> --}}

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- ================================== TOP NAVIGATION : END ================================== -->
                    </div><!-- /.sidemenu-holder -->
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div class="homepage-slider3" id="hero">
                            <div class="owl-carousel owl-inner-nav owl-ui-sm" id="owl-main">
                                <div class="full-width-slider">
                                    <div class="item" style="background-image: url(assets/images/sliders/slider1.png);">
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->

                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/slider2.png);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->

                            </div><!-- /.owl-carousel -->
                        </div>

                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                        <!-- ============================================== INFO BOXES ============================================== -->
                        <div class="info-boxes wow fadeInUp">
                            <div class="info-boxes-inner">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-dollar"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading green">money back</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">30 Day Money Back Guarantee.</h6>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="hidden-md col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-truck"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading orange">free shipping</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">free ship-on oder over Rs. 600.00</h6>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-md-6 col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-gift"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading red">Special Sale</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">All items-sale up to 20% off </h6>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- /.row -->
                            </div><!-- /.info-boxes-inner -->

                        </div><!-- /.info-boxes -->
                        <!-- ============================================== INFO BOXES : END ============================================== -->
                    </div><!-- /.homebanner-holder -->

                </div><!-- /.row -->

                <!-- ============================================== SCROLL TABS ============================================== -->
                <div>
                    <div class="more-info-tab clearfix">
                        <h3 class="new-product-title pull-left">All Products</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    @foreach ($products as $product)
                                <div class="item">
                                    <!-- start product -->
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a
                                                        href="{{ route('product.show', $product->id) }}">
                                                        <img src="{{ asset('products/'.$product->product_image1) }}"
                                                            data-echo="{{ asset('products/'.$product->product_image1) }}" width="180" height="300"
                                                            alt="{{ $product->product_name }}"></a>
                                                </div><!-- /.image -->
                                            </div><!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name">
                                                    <a href="{{ route('product.show', $product->id) }}">
                                                        {{ $product->product_name }}
                                                    </a>
                                                </h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">{{ number_format($product->price, 2) }} </span>
                                                    <span
                                                        class="price-before-discount">Rs.{{ number_format($product->sale_price, 2) }}</span>
                                                </div><!-- /.product-price -->
                                            </div><!-- /.product-info -->
                                            <div class="action">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                                    <input type="hidden" name="price" value="{{ $product->sale_price > 0 ? $product->sale_price : $product->price }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="add-to-cart-mt lnk btn btn-info">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end product -->
                                </div><!-- /.item -->
                                @endforeach
                                    {{-- <div class="item">
                                        <!-- start product -->
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="product-details.php?pid=1">
                                                            <img data-echo="path/to/product-image.jpg"
                                                                src="path/to/product-image.jpg" alt="Product Name"
                                                                width="180" height="300">
                                                        </a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="product-details?pid=1">Product Name</a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price">₹999.99</span>
                                                        <span class="price-before-discount">₹1,299.99</span>
                                                    </div><!-- /.product-price -->
                                                </div><!-- /.product-info -->
                                                <div class="action">
                                                    <a class="lnk btn btn-info"
                                                        href="index?page=product&action=add&id=1">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end product -->
                                    </div><!-- /.item --> --}}

                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div>
                    </div>
                </div>
                <!-- ============================================== TABS ============================================== -->
                <hr />
                <!-- ========================================Brand Slider ========================================= -->
                <div class="logo-slider wow fadeInUp" id="brands-carousel">
                    <h3 class="section-title">Our Brands</h3>
                    <div class="logo-slider-inner">
                        <div class="owl-carousel brand-slider custom-carousel owl-theme" id="brand-slider">
                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/aoc.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                            <!--/.item-->

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/bajaj.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                            <!--/.item-->

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/blackberry.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                            <!--/.item-->

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/canon.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/compas.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/daikin.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/dell.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/samsung.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/hcl.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>



                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/sony.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/voltas.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/lg.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>

                            <div class="item">
                                <a class="image" href="#">
                                    <img data-echo="assets/brandsimage/lenovo.jpg" src="assets/images/blank.gif"
                                        alt="">
                                </a>
                            </div>
                        </div><!-- /.owl-carousel #logo-slider -->
                    </div><!-- /.logo-slider-inner -->
                </div><!-- /.logo-slider -->
            </div>
        </div>
    </div>
@endsection
