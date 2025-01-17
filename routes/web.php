<?php

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

use Illuminate\Http\Resources\Json\Resource;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/thankyou', 'HomeController@thankyou')->name('thankyou');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/features', 'HomeController@features')->name('features');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('/{slug}', 'BlogController@show')->name('blog.show');
});

Route::group(['prefix' => 'cart'], function () {    
    Route::get('/', 'ShoppingCartController@index')->name('cart.index');
    Route::post('/{product}', 'ShoppingCartController@store')->name('cart.store');
    Route::delete('/{id}', 'ShoppingCartController@destroy')->name('cart.destroy');
});

Route::group(['prefix' => 'restaurant' , 'middleware' => ['verified']], function () {
    Route::get('/dashboard', 'Restaurant\DashboardController@index')->name('restaurant.dashboard.index');
});

Route::group(['prefix' => 'checkout'], function () {
    Route::get('/', 'CheckoutController@index')->name('checkout.index');
    Route::post('/', 'CheckoutController@store')->name('checkout.store');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['verify' => true]);

