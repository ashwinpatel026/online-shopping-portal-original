@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Checkout</h2>

        <form action="{{ route('checkout.placeOrder') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="address">Shipping Address</label>
                <textarea class="form-control" name="address" required>{{ $user->address ?? '' }}</textarea>
            </div>

            <h4>Payment Method</h4>
            <div class="form-check">
                <input class="form-check-input" name="payment_method" type="radio" value="COD" checked>
                <label class="form-check-label">Cash on Delivery (COD)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="payment_method" type="radio" value="Internet Banking">
                <label class="form-check-label">Internet Banking</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="payment_method" type="radio" value="Debit/Credit Card">
                <label class="form-check-label">Debit / Credit Card</label>
            </div>

            <button class="btn btn-success mt-3" type="submit">Place Order</button>
        </form>
    </div>
@endsection
