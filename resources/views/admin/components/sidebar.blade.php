<div class="sidebar">


    <ul class="widget widget-menu unstyled">
        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages">
                <i class="menu-icon icon-cog"></i>
                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                Order Management
            </a>
            <ul class="unstyled collapse" id="togglePages">
                <li>
                    <a href="{{route('admin.orders')}}">
                        <i class="icon-tasks"></i>
                        Today's Orders
                        <b class="label orange pull-right">0</b>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.orders')}}">
                        <i class="icon-tasks"></i>
                        Pending Orders
                        <b class="label orange pull-right">0</b>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.orders')}}">
                        <i class="icon-inbox"></i>
                        Delivered Orders
                        <b class="label green pull-right">2</b>

                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.users') }}">
                <i class="menu-icon icon-group"></i>
                Manage users
            </a>
        </li>
    </ul>


    <ul class="widget widget-menu unstyled">
        <li><a href="{{route('categories.index')}}"><i class="menu-icon icon-tasks"></i> Manage Category </a></li>
        <li><a href="{{route('subcategories.index')}}"><i class="menu-icon icon-tasks"></i>Manage Sub Category </a></li>
        <li><a href="{{route('products.index')}}"><i class="menu-icon icon-table"></i>Manage Products </a></li>
        <li><a href="{{route('products.create') }}"><i class="menu-icon icon-paste"></i>Insert Product </a></li>

    </ul>
    <!--/.widget-nav-->

    <ul class="widget widget-menu unstyled">
        <li><a href="#"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>

        {{-- <li>
            <a href="logout.php">
                <i class="menu-icon icon-signout"></i>
                Logout
            </a>
        </li> --}}
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="javascript:void(0)" onclick="this.closest('form').submit()">
                    <i class="menu-icon icon-signout"></i> Logout
                </a>
            </form>
        </li>
        
    </ul>

</div>
<!--/.sidebar-->