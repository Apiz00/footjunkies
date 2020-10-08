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

//admin dashboard route
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/users', 'AdminController@users')->name('users')->middleware('admin');
Route::get('/admin/shops', 'AdminController@shops')->name('shops')->middleware('admin');
Route::post('/admin/shop/delete/{shopid}', 'AdminController@deleteShop')->middleware('admin');

Route::get('/admin/customers', 'AdminController@customers')->name('customers')->middleware('admin');
Route::post('/admin/customer/delete/{custid}', 'AdminController@deleteCustomer')->name('customersdelete')->middleware('admin');

Route::get('/admin/products', 'AdminController@products')->name('products')->middleware('admin');
Route::post('/admin/product/delete/{productid}', 'AdminController@deleteProduct')->name('deleteProducts')->middleware('admin');

Route::get('/admin/tasks', 'AdminController@tasks')->name('tasks')->middleware('admin');
Route::get('/admin/notifications', 'AdminController@notifications')->name('notifications')->middleware('admin');


//manager route
Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/manager/customer', 'ManagerController@customer')->name('customer')->middleware('manager');
Route::get('/manager/location', 'ManagerController@location')->name('location')->middleware('manager');
Route::get('/manager/notifications', 'ManagerController@notifications')->name('notifications')->middleware('manager');
Route::get('/manager/product/create', 'ManagerController@productcreateshow')->name('productcreateshow')->middleware('manager');
Route::post('/manager/product/create', 'ManagerController@productcreate')->name('productcreate')->middleware('manager');
Route::post('/manager/product/delete/{productid}', 'ManagerController@productDelete')->name('productdelete')->middleware('manager');

Route::get('/manager/product', 'ManagerController@product')->name('product')->middleware('manager');
Route::post('/manager/{productid}/update/quantity', 'ManagerController@updateQuantity')->middleware('manager');
Route::get('/manager/shop', 'ManagerController@shop')->name('shop')->middleware('manager');
Route::get('/manager/order', 'ManagerController@order')->name('stock')->middleware('manager');
Route::post('/manager/order/fulfilled/{orderid}', 'ManagerController@fulfillOrder')->middleware('manager');
Route::get('/manager/user', 'ManagerController@user')->name('user')->middleware('manager');
Route::get('/manager/staff', 'ManagerController@staff')->name('staff')->middleware('manager');
Route::get('/register/store', 'ManagerController@registerStore')->name('storereg')->middleware('manager');
Route::post('/register/store', 'ManagerController@createStore')->name('createstore')->middleware('manager');
Route::post('/manager/update/{storeid}', 'ManagerController@updateInfo')->name('updatemanager')->middleware('manager');





Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', function () {
    return view('product');
});

Route::post('/customer/create/order/{product}/{quantity}', 'CustomerController@createOrder')->name('createOrder');

Route::get('/mens', 'CustomerController@mens');
Route::get('/womens', 'CustomerController@womens');
Route::get('/kids', 'CustomerController@kids');
Route::get('/accesories', 'CustomerController@accesories');
Route::get('product/show/{productid}', 'CustomerController@showProduct');

Route::get('/product/{productid}/buy', 'CustomerController@buyProduct');


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
