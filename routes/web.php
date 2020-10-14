<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('login','AuthController@login')->name('user.login');
Route::view('login', 'auth.login')->name('login');
Route::view('register','auth.register')->name('register');
Route::resource('user', 'UserController');


Route::group(['middleware' => 'auth'], function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::get('logout','AuthController@logout')->name('user.logout');
});



