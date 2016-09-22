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

Route::post('/purchase', function() {
	// if (count($_POST) > 0) {
	// 	printf('<pre>%s</pre>', print_r($_POST, 1));

	//extract data from the post
//set POST variables
$url = 'http://s637275571.onlinehome.us/newuser.php';
$fields = array(
	'name' => json_encode($_POST['name']),
	'password' => json_encode($_POST['password']),
	'domain' => json_encode($_POST['domain']),
	
);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
		return view ('/info');
// 		Accounts::create(['name'=>'name','email'=>'email', 'password'=>'password', 'domain'=>'domain', 'street'=>'street', 'city'=>'city', 'state'=>'state', 'zipcode'=>'32817',]);

// 		return view('confirmation');
// 	}
// });

// Route::post('Accounts', '')

// Route::get('/purchase', function() {
// 	return view('purchase');
});

Auth::routes();

Route::get('/app', function () {
	return view('app');
});

Route::get('/home', 'HomeController@index');


Route::resource('Account', 'AccountController');


Route::get('/confirmation', function () {
	return view('confirmation');
});