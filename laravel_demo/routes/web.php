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

Route::group(['prefix' => 'admin'], function() {
    //
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'UserController@index')->name('admin');

Route::get('/list_users', 'UserController@listUsers')->name('list_users');

Route::get('/add_user', 'UserController@getAddUser')->name('add_user');

Route::post('/add_user', 'UserController@addUser')->name('add_user');
