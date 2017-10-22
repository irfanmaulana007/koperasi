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

// User
Route::get('/user', 'UserController@index');

// History
Route::get('/history_order', 'HistoryController@order');
Route::get('/history_order_all', 'HistoryController@order_all');
Route::get('/history_order_pickuponly', 'HistoryController@order_pickuponly');

Route::get('/history_shipment', 'HistoryController@shipment');
Route::get('/history_shipment_all', 'HistoryController@shipment_all');
Route::get('/history_shipment_pickuponly', 'HistoryController@shipment_pickuponly');


Route::get('/{url}', 'HomeController@error_404');