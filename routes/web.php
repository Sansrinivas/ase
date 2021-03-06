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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login_form');

	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');

	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
	Route::get('/admin', 'Auth\AdminController@index')->name('admin.dashboard');
});


