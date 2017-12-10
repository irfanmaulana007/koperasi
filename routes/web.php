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
Route::get('login', 'HomeController@index');
Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::get('register', 'AuthController@register');
Route::post('register', 'AuthController@doRegister');

// Master
Route::resource('master/pinjaman', 'PinjamanController');
Route::resource('master/role', 'RoleController');
Route::resource('master/simpanan', 'SimpananController');
Route::resource('master/status', 'StatusController');

// Transaction
// For User
Route::get('simpan', 'TrsSimpananController@index');
Route::get('pinjam', 'TrsPinjamanCOntroller@index');
// For Admin - List
Route::get('simpanan-list', 'SimpananListController@index');
Route::get('pinjaman-list', 'PinjamanListController@index');

// User
Route::get('staff', 'UserController@staff');
Route::resource('user', 'UserController');

Route::get('/{url}', 'HomeController@error_404');