<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index() {
        return view('admin.index');
    }

    public function users() {

        // Fetch and pass user data to the view
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}