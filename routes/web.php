<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AuthAdmin; // Ensure this middleware exists
use App\Http\Controllers\Frontend\CategoryFrontController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/category/{categoryId}', [CategoryFrontController::class, 'show'])->name('category.show');
Route::get('/product-details/{id}', [ProductDetailsController::class, 'show'])->name('product.show');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');
Route::delete('/cart/remove/{rowId}', [CartController::class, 'remove_from_cart'])->name('cart.remove');


Route::middleware(['auth'])->group(function () {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/subcategories', SubcategoryController::class);
    Route::resource('/admin/products', ProductController::class);

});