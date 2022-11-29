<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@postLogin');
Route::middleware(['auth'])->group(function () {
    Route::get('admin', 'Admin\AdminController@index');
});
Route::get('/', 'Front\HomeController@index');
Route::get('/productDetail/{id}', 'Front\ProductController@index');
Route::get('/category/{id}', 'Front\CategoryController@index');
Route::match(['get', 'post'],'/signUp', 'Front\SignUpController@index')->name('route_FrontEnd_SignUp_index');
//
Route::match(['get', 'post'],'/login', 'Front\LoginController@index')->name('route_FrontEnd_Login_index');

