<?php

use Illuminate\Support\Facades\Auth;
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

// Products (Admin)
Route::group(['middleware' => ['auth','role:user']], function(){
    Route::resource('/dashboard', 'DashboardController');
});

// Product (User)

Route::group(['middleware' => ['auth','role:user']], function(){

    Route::resource('/product', 'ProductController');
    Route::resource('/shop', 'ShopController');
    Route::resource('/product-detail', 'ProductDetailController');
    Route::resource('/checkout', 'CheckoutController');
    Route::resource('/shopping-cart', 'ShoppingCartController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/clothes', 'ClothesController');
    Route::resource('/shoes', 'ShoesController');
    Route::resource('/accessories', 'AccessoriesController');
    Route::resource('/post', 'PostController');
    Route::resource('/about-us', 'AboutUsController');

    //filter pages
    // Route::get('/all_sort', 'FilterController@sortById')->name('all_sort');
    Route::post('/newest_sort', 'FilterController@sortByTime')->name('newest_sort');
    Route::post('/name_sort', 'FilterController@sortByName')->name('name_sort');
    Route::post('/price_sort', 'FilterController@sortByPrice')->name('price_sort');
    Route::post('/all_product', 'FilterController@allProduct')->name('all_product');
});
