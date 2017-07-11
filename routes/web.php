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

/*Route::get('/admin', function () {
    return view('admin.login');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Admin routes
// /*******/

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Admin login

Route::post('admin_logout', 'AdminAuth\LoginController@logout');
Route::get('admin', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin', 'AdminAuth\LoginController@login');

// Admin register - new admin

Route::get('admin/administrators/create', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/administrators/create', 'AdminAuth\RegisterController@register');

