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
    return view('login');
});

Route::get('/grovr', function () {
    return view('grovr');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});
Route::get('logout', 'Registration@getLogout');

Route::post('/login', 'Registration@login');

Route::post('/signup', 'Registration@signup');


Route::get('/home', 'HomeController@index')->name('home');
