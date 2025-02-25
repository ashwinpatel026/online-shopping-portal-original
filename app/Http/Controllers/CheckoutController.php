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

    public function placeOrder(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
        ]);
        $items = Cart::instance('cart')->content();
        foreach ($items as $item) {
            $order = new Order();
            $order->user_id = Auth::id();
            $order->payment_method = $request->payment_method;
            $order->product_id = $item->id;
            $order->quantity = $item->qty;
            $order->order_status = 'Order Placed';
            $order->save();
        }
        // Clear Cart After Order
        Cart::destroy();

        return redirect()->route('user.orders')->with('success', 'Order placed successfully!');
    }
    
}