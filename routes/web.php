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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\adminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\adminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'adminController@index')->name('admin.dashboard');
  });