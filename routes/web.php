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
