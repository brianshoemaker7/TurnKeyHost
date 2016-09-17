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

Route::post('/purchase', function() {
	if (count($_POST) > 0) {
		printf('<pre>%s</pre>', print_r($_POST, 1));
		return view ('/info');
	}
});

Route::get('/purchase', function() {
	return view('purchase');
});

Auth::routes();

Route::get('/app', function () {
	return view('app');
});

Route::get('/home', 'HomeController@index');

Route::resource('NewUser', 'NewUserController');

// Route::post('/purchase', 'NewSetupController');

