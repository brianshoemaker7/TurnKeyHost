<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plans', function() {
	return view('plans');
});

Route::get('/contact', function() {
	return view('contact');
});

Auth::routes();

Route::get('/app', function () {
	return view('app');
});

Route::get('/home', 'HomeController@index');
