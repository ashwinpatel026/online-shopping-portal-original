<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping Portal | Admin login</title>
	<link type="text/css" href="{{ asset('assets/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link type="text/css" href="{{asset('assets/admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('assets/admin/css/theme.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('assets/admin/images/icons/css/font-awesome.css')}}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>
                  <a class="brand" href="{{route('admin.index')}}">
                      Shopping Portal | Admin
                  </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                        <li><a href="{{route('home.index')}}">
                        Back to Portal
                        </a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="module module-login span4 offset4">
                    @if ($errors->any())
                        <p>{{ $errors->first() }}</p>
                    @endif
                    <form action="{{ route('admin.login') }}" class="form-vertical" method="post">
                        @csrf
                        <div class="module-head">
                            <h3>Sign In</h3>
                        </div>
                        <div class="module-body">
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="email" name="email" required placeholder="Admin Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                        <input class="span12" type="password" name="password" required placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="module-foot">
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.wrapper-->

    <div class="footer">
        <div class="container">
            <b class="copyright"> Shopping Portal </b>
        </div>
    </div>

    {{-- <h2>Admin Login</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif --}}

    <script src="{{asset('assets/admin/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/admin/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

</body>
</html>
