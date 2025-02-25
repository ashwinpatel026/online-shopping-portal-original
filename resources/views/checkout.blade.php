@extends('layouts.app')

@section('content')
<div class="container">
    <div class="checkout-box faq-page inner-bottom-sm">
        <div class="row">
            <div class="col-md-12">
                <h2>Choose Payment Method</h2>
                <div class="panel-group checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->
                    <div class="panel panel-default checkout-step-01">
                        <!-- panel-heading -->
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                    Select your Payment Method
                                </a>
                            </h4>
                        </div>
                        <!-- panel-heading -->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- panel-body  -->
                            <div class="panel-body">
                                <form action="{{ route('checkout.placeOrder') }}" name="payment" method="POST">
                                    @csrf
                                    <input type="radio" name="payment_method" value="COD" checked="checked"> COD
                                    <input type="radio" name="payment_method" value="Internet Banking"> Internet Banking
                                    <input type="radio" name="payment_method" value="Debit / Credit card"> Debit / Credit
                                    card <br /><br />
                                    <button class="btn btn-success mt-3" type="submit">Place Order</button>
                                </form>
                            </div>
                            <!-- panel-body  -->
                        </div><!-- row -->
                    </div>
                    <!-- checkout-step-01  -->
                </div><!-- /.checkout-steps -->
            </div>
        </div><!-- /.row -->
    </div>
</div>
@endsection