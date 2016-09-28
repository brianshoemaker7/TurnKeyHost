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
Use App\Accounts;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plans', function() {
	return view('plans');
});

Route::get('/contact', function() {
	return view('contact');
});

// Route::post('/purchase', function() {
// // 	if (count($_POST) > 0) {
// // 		printf('<pre>%s</pre>', print_r($_POST, 1));


// );



// Route::post('Accounts', '')

// Route::get('/purchase', function() {
// 	return view('purchase');
// });

Auth::routes();

Route::get('/app', function () {
	return view('app');
});

Route::get('/home', 'HomeController@index');


Route::resource('Account', 'AccountController');


Route::get('/confirmation', function () {
	return view('confirmation');
});