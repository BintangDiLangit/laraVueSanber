<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// bisa pasang di sini
// Route::get('/user','UserController@user')->middleware('verifEmail');

// for group
Route::middleware('verifEmail')->group(function () {
    Route::get('/user','UserController@user');
    Route::get('/user1','UserController@user1');
// Route::get('/user2','UserController@user');
// Route::get('/user3','UserController@user');
});

Route::get('/admin', 'UserController@admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
