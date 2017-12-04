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

// Dashboard
Route::get('/', 'HomeController@index');

// Auth
Route::get('login', 'HomeController@login');
Route::get('register', 'UserController@create');

// Master
Route::resource('master/status', 'StatusController');
Route::resource('master/pinjaman', 'PinjamanController');
Route::resource('master/simpanan', 'SimpananController');

// User
Route::resource('user', 'UserController');

Route::get('/{url}', 'HomeController@error_404');