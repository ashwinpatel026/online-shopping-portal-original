<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; 

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function orders() {

        $orders = Order::where('user_id', Auth::id())->with('product')->latest()->get();
        
        return view('user.orders', compact('orders'));
    }
}