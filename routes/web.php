<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin-panel', 'adminController@login');
Route::get('/dashboard', 'adminController@dashboard');
Route::match(['get', 'post'], '/admin-panel', 'adminController@login');
Route::get('/logout', 'adminController@logout');
Route::get('/settings', 'adminController@settings');
Route::get('/admin-panel/check-pwd','adminController@chackpassword');
Route::match(['get','post'], '/admin-panel/update-password', 'adminController@updatepassword');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
