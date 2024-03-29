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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('rak', 'RakController', ['except' => ['show']]);
    Route::resource('book', 'BookController');
    Route::get('book/search', 'BookController@search');
    Route::get('rak/{id}', 'RakController@rak');
    Route::resource('peminjaman', 'PeminjamanController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
    Route::get('peminjam/create', 'PeminjamController@index')->name('peminjam');
    Route::post('peminjam/create', 'PeminjamController@store')->name('peminjam_store');
});
