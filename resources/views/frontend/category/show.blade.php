@extends('layouts.app')

@section('content')
    {{-- <div class="category-container">
        <h1>{{ $category->category_name }}</h1>

        @if ($products->isEmpty())
            <p>No products found in this category.</p>
        @else
            <div class="products-list">
                @foreach ($products as $product)
                    <div class="product-item">
                        <img src="{{ asset('products/'.$product->product_image1) }}" alt="{{ $product->product_name }}">
                        <h3>{{ $product->product_name }}</h3>
                        <p>{{ $product->product_description }}</p>
                        <p>Price: ${{ $product->price }}</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div> --}}
    <div class="m-t-20 container">
        <div class="row outer-bottom-sm">
            <div class="col-md-3 sidebar">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Sub Categories</div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                            <ul class="nav">
                                @if ($subcategories)
                                    @foreach ($subcategories as $sub_cat)
                                        <li class="dropdown menu-item">
                                            <a class="dropdown-toggle" href="sub-category.php?scid=8"><i
                                                    class="icon fa fa-desktop fa-fw"></i>
                                                {{ $sub_cat->subcategory_name }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <div class="sidebar-module-container">
                    <h3 class="section-title">shop by</h3>
                    <div class="sidebar-filter">
                        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
                        <div class="sidebar-widget wow fadeInUp outer-bottom-xs animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="widget-header m-t-20">
                                <h4 class="widget-title">Category</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                @if ($categories)
                                    @foreach ($categories as $cat)
                                        <div class="accordion">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a class="accordion-toggle collapsed"
                                                        href="{{ route('category.show', ['categoryId' => $cat->id]) }}">{{ $cat->category_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <!-- /.sidebar-widget-body -->
                        </div>
                        <!-- /.sidebar-widget -->
                        <!-- ============================================== COLOR: END ============================================== -->
                    </div>
                    <!-- /.sidebar-filter -->
                </div>
                <!-- /.sidebar-module-container -->
            </div>
            <!-- /.sidebar -->
            <div class="col-md-9">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <div class="category-carousel hidden-xs" id="category">
                    <div class="item">
                        <div class="image">
                            <img class="img-responsive" src="{{ asset('assets/images/banners/cat-banner-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="container-fluid">
                            <div class="caption vertical-top text-left">
                                <div class="big-text">
                                    <br>
                                </div>
                                <div class="excerpt hidden-sm hidden-md">
                                    {{ $category->category_name }}
                                </div>
                            </div>
                            <!-- /.caption -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
                <div class="search-result-container">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active" id="grid-container">
                            <div class="category-product inner-top-vs">
                                <div class="row">
                                    @if ($products)
                                        @foreach ($products as $product)
                                            <div class="col-sm-6 col-md-4 wow fadeInUp animated"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="{{ route('product.show', $product->id) }}"><img
                                                                        src="{{ asset('products/' . $product->product_image1) }}"
                                                                        alt="" width="200" height="300"></a>
                                                            </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="{{ route('product.show', $product->id) }}">{{ $product->product_name }}</a>
                                                            </h3>
                                                            <div class="rating rateit-small rateit">
                                                                <button class="rateit-reset" id="rateit-reset-3"
                                                                    data-role="none" aria-label="reset rating"
                                                                    aria-controls="rateit-range-3"
                                                                    style="display: none;"></button>
                                                                <div class="rateit-range" id="rateit-range-3" role="slider"
                                                                    aria-label="rating" aria-owns="rateit-reset-3"
                                                                    aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"
                                                                    aria-readonly="true" tabindex="0"
                                                                    style="width: 80px; height: 16px;">
                                                                    <div class="rateit-selected"
                                                                        style="height: 16px; width: 64px;"></div>
                                                                    <div class="rateit-hover" style="height:16px"></div>
                                                                </div>
                                                            </div>
                                                            <div class="description"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    Rs. {{ $product->price }} </span>
                                                                <span class="price-before-discount">Rs.
                                                                    {{ $product->sale_price }} </span>
                                                            </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <form action="{{ route('cart.add') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input name="id" type="hidden"
                                                                                value="{{ $product->id }}">
                                                                            <input name="product_name" type="hidden"
                                                                                value="{{ $product->product_name }}">
                                                                            <input name="price" type="hidden"
                                                                                value="{{ $product->sale_price > 0 ? $product->sale_price : $product->price }}">
                                                                            <input name="quantity" type="hidden"
                                                                                value="1">
                                                                            <button class="add-to-cart-mt lnk btn btn-info"
                                                                                type="submit">Add to Cart</button>
                                                                        </form>

                                                                    </li>
                                                                    <li class="lnk wishlist">
                                                                        <a class="add-to-wishlist"
                                                                            href="category.php?pid=16&amp;&amp;action=wishlist"
                                                                            title="Wishlist">
                                                                            <i class="icon fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.search-result-container -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.logo-slider -->
    </div>
@endsection
