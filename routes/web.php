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
// For Admin - List
Route::get('simpanan-list', 'TrsSimpananController@showall');
Route::put('simpanan/{id}/approve', 'TrsSimpananController@approve');
Route::get('tarikdana-list', 'TrsTarikdanaController@showall');
Route::put('tarikdana/{id}/approve', 'TrsTarikdanaController@approve');
Route::get('pinjaman-list', 'TrsPinjamanController@showall');
Route::put('pinjaman/{id}/approve', 'TrsPinjamanController@approve');
Route::get('angsuran-list', 'TrsAngsuranController@showall');
Route::put('angsuran/{id}/approve', 'TrsAngsuranController@approve');

// For User
Route::resource('pinjam', 'TrsPinjamanController');
Route::get('simpan/{id}/tarik', 'TrsSimpananController@tarik');
Route::post('simpan/{id}/tarik', 'TrsSimpananController@tarikdana');
Route::resource('simpan', 'TrsSimpananController');
Route::get('angsur/{id}/angsur', 'TrsAngsuranController@angsur');
Route::post('angsur/{id}/angsur', 'TrsAngsuranController@doAngsur');
Route::resource('angsur', 'TrsAngsuranController');
Route::get('tarikdana/{id}/tarik', 'TrsTarikdanaController@tarikdana');
Route::post('tarikdana/{id}/tarik', 'TrsTarikdanaController@doTarik');
Route::resource('tarikdana', 'TrsTarikdanaController');
// Route::get('pinjam', 'TrsPinjamanController@index');
// Route::get('pinjam/create', 'TrsPinjamanController@create');
// Route::post('pinjam/create', 'TrsPinjamanController@store');

// User
Route::get('staff', 'UserController@staff');
Route::resource('user', 'UserController');

Route::get('/{url}', 'HomeController@error_404');