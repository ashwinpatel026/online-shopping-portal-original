<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

            <a class="brand" href="#">
                Shopping Portal | Admin
            </a>

            <div class="nav-collapse navbar-inverse-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="#">
                            Admin
                        </a></li>
                    <li class="nav-user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="nav-avatar" src="{{ asset('assets/admin/images/user.png') }}" />
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="change-password.php">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->
