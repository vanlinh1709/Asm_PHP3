<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Admin
Route::match(['get', 'post'],'/admin/login', 'Auth\LoginController@index')->name('route_BackEnd_Login_index');
Route::middleware(['auth'])->group(function () {
    //auth
    Route::get('admin', 'Admin\HomeController@index')->name('route_BackEnd_Home_index');
    Route::get('admin/logout', 'Auth\LoginController@getLogOut')->name('route_Auth_logout');
    //user
    Route::get('admin/user', 'Admin\UserController@index')->name('route_BackEnd_User_index');
    Route::match(['get', 'post'],'admin/user/add', 'Admin\UserController@add')->name('route_BackEnd_User_add');
    Route::match(['get', 'post'],'admin/user/update/{id}', 'Admin\UserController@update')->name('route_BackEnd_User_update');
    Route::get('/admin/deleteUser/{id}', 'Admin\UserController@delete')->name('route_BackEnd_User_delete');
    //category

    //product
    Route::get('admin/product', 'Admin\ProductController@index')->name('route_BackEnd_Product_index');
    Route::match(['get', 'post'],'admin/product/add', 'Admin\ProductController@add')->name('route_BackEnd_Product_add');
    Route::match(['get', 'post'],'admin/product/update/{id}', 'Admin\ProductController@update')->name('route_BackEnd_Product_update');
    Route::get('/admin/deleteProduct/{id}', 'Admin\ProductController@delete')->name('route_BackEnd_Product_delete');
    //order
    Route::get('admin/order', 'Admin\OrderController@index')->name('route_BackEnd_Order_index');
    Route::match(['get', 'post'],'admin/order/update/{id}', 'Admin\OrderController@update')->name('route_BackEnd_Order_update');
    //
    Route::get('admin/orderDetail/{id}', 'Admin\OrderController@detail')->name('route_BackEnd_Order_detail');

});

//Front
Route::get('/', 'Front\HomeController@index')->name('route_FrontEnd_Home_index');
Route::get('/productDetail/{id}', 'Front\ProductController@index');
Route::get('/category/{id}', 'Front\CategoryController@index');
Route::match(['get', 'post'],'/signUp', 'Front\SignUpController@index')->name('route_FrontEnd_SignUp_index');
//
Route::match(['get', 'post'],'/login', 'Auth\LoginController@index')->name('route_FrontEnd_Login_index');
Route::get('/cart', 'Front\CartController@index')->name('route_FrontEnd_Cart_index');
Route::get('/cart/add/{id}', 'Front\CartController@add')->name('route_FrontEnd_Cart_add');
Route::post('/cart/update/{id}', 'Front\CartController@update')->name('route_FrontEnd_Cart_update');
Route::get('/cart/delete/{id}', 'Front\CartController@delete')->name('route_FrontEnd_Cart_delete');
Route::get('/cart/clear', 'Front\CartController@clear')->name('route_FrontEnd_Cart_clear');
//order
Route::get('/order', 'Front\OrderController@index')->name('route_FrontEnd_Order_index');
Route::post('/order/add', 'Front\OrderController@add')->name('route_FrontEnd_Order_add');
//
Route::get('front/logout', 'Auth\LoginController@getLogOut')->name('route_Auth_Client_logout');
