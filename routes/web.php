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
