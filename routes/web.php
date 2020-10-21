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
    return view('guests.home');
});

Auth::routes();

// Route::get('admin/home', 'Admin\HomeController@index')->name('home');
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {
    Route::resource('/home', 'HomeController');
    Route::resource('posts', 'PostController');
});
