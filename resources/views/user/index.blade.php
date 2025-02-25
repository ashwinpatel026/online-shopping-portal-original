@extends('layouts.app')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li class='active'>User Account</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="checkout-box inner-bottom-sm">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                        <span>1</span>My Profile
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Personal info</h4>
                                        <div class="col-md-12 col-sm-12 already-registered-login">

                                            <form class="register-form">
                                                <div class="form-group">
                                                    <label class="info-title" for="name">Name<span>*</span></label>
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input"
                                                        value="{{ Auth::user()->name }}" id="name" name="name"
                                                        required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="exampleInputEmail1">Email Address
                                                        <span>*</span></label>
                                                    <input type="email"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputEmail1" value="{{ Auth::user()->email }}"
                                                        readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="Contact No.">Contact No.
                                                        <span>*</span></label>
                                                    <input type="text"
                                                        class="form-control unicase-form-control text-input"
                                                        id="contactno" name="contactno" required="required"
                                                        value="{{ Auth::user()->contact_no }}" maxlength="10">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- already-registered-login -->
                                    </div>
                                </div>
                                <!-- panel-body  -->
                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                        href="#collapseTwo">
                                        <span>2</span>Change Password
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="info-title" for="Current Password">Current
                                                Password<span>*</span></label>
                                            <input type="password" class="form-control unicase-form-control text-input"
                                                id="cpass" name="cpass" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title" for="New Password">New Password
                                                <span>*</span></label>
                                            <input type="password" class="form-control unicase-form-control text-input"
                                                id="newpass" name="newpass">
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title" for="Confirm Password">Confirm Password
                                                <span>*</span></label>
                                            <input type="password" class="form-control unicase-form-control text-input"
                                                id="cnfpass" name="cnfpass" required="required">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->
                    </div><!-- /.checkout-steps -->
                </div>
                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-checkout-progress list-unstyled">
                                        <li><a href="{{route('user.index')}}">My Account</a></li>
                                        <li><a href="#">Shipping / Billing Address</a></li>
                                        <li><a href="{{route('user.orders')}}">Order History</a></li>
                                        <li><a href="{{route('user.orders')}}">Payment Pending Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- checkout-progress-sidebar -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <?php //include('includes/brands-slider.php');?>
    </div>
</div>

@endsection