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
Auth::routes();

## Store ##
Route::get('/', 'Store\HomeController@home')->name('home');
Route::get('/product/{key}', 'Store\ProductController@show');

## Admin ##
Route::get('/admin-dashboard', 'Dashboard\HomeController@home')->name('admin-dashboard');
Route::get('/admin-dashboard/add_new_product', 'Dashboard\ProductController@addNewProduct')->name('add_new_product');
Route::post('/admin-dashboard/add_new_product', 'Dashboard\ProductController@saveNewProduct')->name('save_new_product');
Route::get('/admin-dashboard/all_products', 'Dashboard\ProductController@allProducts')->name('all_products');

