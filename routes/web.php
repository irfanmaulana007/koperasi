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

Route::get('/', 'HomeController@content');
Route::get('/content', 'HomeController@content');
Route::get('/profile', 'HomeController@profile');
Route::get('/invoice', 'HomeController@invoice');
Route::get('/table', 'HomeController@table');

// Order
Route::get('/new-order', 'OrderController@new_order');
Route::get('/create-order', 'OrderController@create_order');

// User
Route::get('/user', 'UserController@index');

// History
Route::get('/history-order', 'HistoryController@order');
Route::get('/history-order-all', 'HistoryController@order_all');
Route::get('/history_order-pickuponly', 'HistoryController@order_pickuponly');

Route::get('/history-shipment', 'HistoryController@shipment');
Route::get('/history-shipment-all', 'HistoryController@shipment_all');
Route::get('/history-shipment-pickuponly', 'HistoryController@shipment_pickuponly');


Route::get('/{url}', 'HomeController@error_404');