<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
});

// Route::get('/cart', function () {
//     return view('cart');
// });

Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::post('/add-to-cart', '\App\Http\Controllers\ProductController@addToCart');
Route::get('/cart', '\App\Http\Controllers\ProductController@viewCart');

Route::resource('/users', \App\Http\Controllers\UserController::class);
Route::get('/admin_products', '\App\Http\Controllers\ProductController@addProduct');
