<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use App\Models\User;
use App\Models\Order;

class CheckoutController extends Controller
{
    //
    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to proceed to checkout.');
        }

        $user = Auth::user();
        $cartItems = Cart::instance('cart')->content();

        return view('checkout', compact('user', 'cartItems'));
    }
}