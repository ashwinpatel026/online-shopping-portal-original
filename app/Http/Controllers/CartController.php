<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use App\Models\User;
// use Cart;

class CartController extends Controller
{
    public function index() {
        $items = Cart::instance('cart')->content();
        // dd($items);
        return view('cart', compact('items'));
    }

    public function add_to_cart(Request $request) {
        Cart::instance('cart')->add($request->id, $request->product_name, $request->quantity, $request->price)->associate('App\Models\Product');
        return redirect()->back();
    }

    public function increase_cart_quantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back();
    }
    
    public function decrease_cart_quantity($rowId) {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back();
    }

    public function remove_from_cart($rowId) {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back();
    }

    public function update_billing(Request $request, string $id) {
        
        $user = User::findOrFail($id);

        $request->validate([
            'billingaddress' => 'required',
            'bilingstate' => 'required',
            'billingcity' => 'required',
            'billingpincode' => 'required',
        ]);

        $user->billing_address = $request->billingaddress;
        $user->billing_state = $request->bilingstate;
        $user->billing_city = $request->billingcity;
        $user->billing_pincode = $request->billingpincode;

        $user->save();

        return redirect()->back();

    }

    public function update_shipping(Request $request, string $id) {
        
        $user = User::findOrFail($id);

        $request->validate([
            'shipping_address' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_pincode' => 'required',
        ]);

        $user->shipping_address = $request->shipping_address;
        $user->shipping_state = $request->shipping_state;
        $user->shipping_city = $request->shipping_city;
        $user->shipping_pincode = $request->shipping_pincode;

        $user->save();

        return redirect()->back();

    }
}