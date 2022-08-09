<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


//Frontend Controller

Route::get("/",[App\Http\Controllers\FrontendController::class,'welcome'])->name('welcome');

Route::resource('product',ProductController::class);
Route::get('product/',[ProductController::class,'search'])->name('search');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('/admin',[App\Http\Controllers\AdminController::class,'login'])->name('admin_login');
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin_dashboard');

//category
Route::get('/admin/category',[App\Http\Controllers\CategoryController::class,'index'])->name('category');
Route::resource('/admin/category',App\Http\Controllers\CategoryController::class);

//subcategory
Route::get('/admin/subcategory',[App\Http\Controllers\SubCategoryController::class,'index'])->name('subcategory');
Route::resource('/admin/subcategory',App\Http\Controllers\SubCategoryController::class);

//adminproduct
Route::get('/admin/products',[App\Http\Controllers\AdminProductController::class,'index'])->name('products');
Route::resource('/admin/products',App\Http\Controllers\AdminProductController::class);

Route::get('/admin/users',[App\Http\Controllers\UserController::class,'index'])->name('users');
Route::resource('/admin/users',App\Http\Controllers\UserController::class);

//Shopping Cart
Route::get('/add-cart/{id}',[App\Http\Controllers\CartController::class,'add'])->name('add-cart');
Route::get('/cart',[App\Http\Controllers\CartController::class,'index'])->name('cart');
Route::get('/delete-cart/{id}',[App\Http\Controllers\CartController::class,'destroy'])->name('delete-cart');
Route::get('/cart-increase/{id}',[App\Http\Controllers\CartController::class,'increase'])->name('cart-increase');
Route::get('/cart-decrease/{id}',[App\Http\Controllers\CartController::class,'decrease'])->name('cart-decrease');
Route::group(['middleware'=> 'auth'],function(){
Route::get('/checkout',[App\Http\Controllers\CartController::class,'checkout'])->name('checkout');
});

//Cart Order
Route::resource('order',App\Http\Controllers\OrderController::class);
Route::get('/checkout_success',[App\Http\Controllers\OrderController::class,'checkout_success'])->name('checkout_success');

//Order
Route::get('/admin/orders',[App\Http\Controllers\OrderController::class,'index'])->name('orders');
Route::post('/admin/order_confirm/{id}',[App\Http\Controllers\OrderController::class,'order_confirm'])->name('order_confirm');
Route::resource('/admin/orders',App\Http\Controllers\OrderController::class);

//Order Tracking
Route::get('/admin/ordertracking/{order_no}',[App\Http\Controllers\OrdertrackingController::class,'index'])->name('ordertracking');
Route::post('/admin/{id}',[App\Http\Controllers\OrdertrackingController::class,'update1'])->name('ordertracking_update1');
Route::post('/admin/{id}',[App\Http\Controllers\OrdertrackingController::class,'update2'])->name('ordertracking_update2');
Route::post('/admin/{id}',[App\Http\Controllers\OrdertrackingController::class,'update3'])->name('ordertracking_update3');
Route::post('/admin/{id}',[App\Http\Controllers\OrdertrackingController::class,'update4'])->name('ordertracking_update4');


