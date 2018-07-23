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

Route::get('/', 'HomeController@index')->name('homePage');

// |---------------------------------- Cart Managment Routes ----------------------------------|
    // addToCart --> add item to cart
Route::get('/addToCart/{productId}/{productName}/{productPrice}', 'cartController@addToCart')->name('cart.add');
    // removeFromCart --> remove item from cart
Route::get('/removeFromCart/{productId}', 'cartController@remove')->name('cart.remove');
    // viewCart --> view items present in the cart
Route::get('/viewCart', 'cartController@view')->name('cart.view');
// updateCart --> update cart item quantity
Route::post('/updateCart', 'cartController@update')->name('cart.update');
// CheckOutCart --> change cart item to customer order and save in database as customer order
Route::get('/checkOutCart', 'cartController@checkout')->name('cart.checkOut');


// |---------------------------------- User Routes ----------------------------------|
Auth::routes();
Route::get('/home', 'HomeController@dashboard')->name('home');
Route::get('/orders', 'HomeController@orders')->name('orders');
Route::post('/editDetails', 'HomeController@editDetails')->name('editDetails');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::prefix('admin')->group(function() {
// dashboard
Route::get('/', 'adminController@index')->name('admin.dashboard');
  });