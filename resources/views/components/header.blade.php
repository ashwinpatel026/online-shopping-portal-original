<header class="header-style-1">

    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">

                        <li> <a href="{{route('user.index')}}"><i class="icon fa fa-user"></i>My Account</a></li>
                        <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="{{route('cart.index')}}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        @guest
                            <li><a href="{{ route('login') }}"><i class="icon fa fa-sign-in"></i>Login</a></li>
                        @endguest
                        @auth
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="javascript:void(0)" onclick="this.closest('form').submit()">
                                        <i class="icon fa fa-sign-out"></i> Logout
                                    </a>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a class="dropdown-toggle" href="{{route('user.orders')}}"><span class="key">Track Order</b></a>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <h2>Shopping Portal</h2>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <div class="search-area">
                        <form name="search" method="post" action="search-result.php">
                            <div class="control-group">
                                <input class="search-field" name="product" placeholder="Search here..."
                                    required="required" />
                                <button class="search-button" name="search" type="submit"></button>
                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="dropdown-cart">
                        <a href="{{route('cart.index')}}" class="lnk-cart">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">Rs.</span>
                                        <span class="value">{{Cart::instance('cart')->subtotal() }}</span>
                                    </span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                @if(Cart::instance('cart')->count() > 0) 
                                    <div class="basket-item-count"><span class="count">{{Cart::instance('cart')->count()}}</span></div>
                                @else
                                    <div class="basket-item-count"><span class="count">0</span></div>
                                @endif
                            </div>
                        </a>
                    </div>

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div>
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-target="#mc-horizontal-menu-collapse"
                        data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a class="dropdown-toggle" data-hover="dropdown"
                                        href="{{ route('home.index') }}">Home</a>

                                </li>
                                @if($categories)
                                    @foreach($categories as $category) 
                                        <li class="dropdown yamm">
                                            <a href="{{ route('category.show', ['categoryId' => $category->id]) }}"> {{ $category->category_name }}</a>
        
                                        </li>
                                    @endforeach
                                @endif
                                        
                                {{-- @if($categories)
                                    @foreach($categories as $category) 
                                        <li class="dropdown yamm">
                                            <a href="{{ route('category.show', ['categoryId' => $category->id]) }}"> {{ $category->cateogry_name }}</a>
        
                                        </li>
                                    @endforeach
                                @endif --}}


                                <li class="dropdown yamm">
                                    @auth
                                        <a href="{{ Auth::user()->utype === 'ADM' ? route('admin.index') : route('user.index') }}"
                                            style="color:#000"> Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" style="color:#000"> Admin Login</a>
                                    @endauth

                                </li>
                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- ============================================== HEADER : END ============================================== -->
