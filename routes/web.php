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
    return view('home');
})->name("home");

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');

Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', function () {
    return view('product');
});
Route::get('/mens', function () {
    return view('mens');
});
Route::get('/womens', function () {
    return view('womens');
});
Route::get('/kids', function () {
    return view('kids');
});
Route::get('/accesories', function () {
    return view('accesories');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/orderstracking', function () {
    return view('orderstracking');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login-cust', function () {
    return view('login-cust');
});
Route::get('/login-vendor', function () {
    return view('login-ven');
});
Route::get('/shop-cart', function () {
    return view('shop-cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
