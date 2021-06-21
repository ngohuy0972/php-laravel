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

Auth::routes();

Route::get('/home_page', 'HomeController@index')->name('/home_page');

// Products
Route::resource('/shop', 'ProductController');
Route::resource('/product-detail', 'ProductDetailController');
Route::resource('/checkout', 'CheckoutController');
Route::resource('/shopping-cart', 'ShoppingCartController');
Route::resource('/contact', 'ContactController');