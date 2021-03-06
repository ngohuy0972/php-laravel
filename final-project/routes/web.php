<?php

use App\Http\Controllers\SearchController;
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
Route::group(['middleware' => ['auth','role:admin']], function(){
    Route::resource('/dashboard', 'DashboardController');

    Route::resource('/product', 'ProductController');
    Route::resource('/shop', 'ShopController');
    Route::resource('/product-detail', 'ProductDetailController');
    Route::resource('/checkout', 'CheckoutController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/clothes', 'ClothesController');
    Route::resource('/shoes', 'ShoesController');
    Route::resource('/accessories', 'AccessoriesController');
    Route::resource('/post', 'PostController');
    Route::resource('/about-us', 'AboutUsController');
    Route::post('/add-to-cart', 'CartController@addToCart')->name('add_to_cart');
    Route::get('/shopping-cart', 'CartController@index')->name('shopping-cart');

    //filter pages
    Route::post('/newest_sort', 'FilterController@sortByTime')->name('newest_sort');
    Route::post('/name_sort', 'FilterController@sortByName')->name('name_sort');
    Route::post('/price_sort', 'FilterController@sortByPrice')->name('price_sort');
    Route::post('/all_product', 'FilterController@allProduct')->name('all_product');

    // Search
    Route::get('/search', 'SearchEngineController@searchEngine')->name('search');
    Route::get('/search_result', 'SearchEngineController@searchIndex')->name('search_result');

});

