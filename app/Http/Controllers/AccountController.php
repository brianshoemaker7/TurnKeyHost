<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Account = Accounts::all();
        return $Accounts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    	return view('create');
	}



    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $Account = new Account;
  //      $post_data = $request->all();
		$Account->name = $request->name;		
		$Account->email = $request->email;
		$Account->password = $request->password;
		$Account->domain = $request->domain;
		$Account->street = $request->street;
		$Account->city = $request->city;
		$Account->state = $request->state;
		$Account->zipcode = $request->zipcode;
		$Account->save();

//Assign the variables for curl

$url = 'http://s637275571.onlinehome.us/newuser.php';
$name = $_POST['name'];
$password = $_POST['password'];
$domain = $_POST['domain'];    

//Pass the variables into an array and encode them
$data = array("name" => "$name", "password" => "$password", "domain" => "$domain");
$data_string = json_encode($data);

//Begin curl operation by passing in variables and options
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//Execute post
$result = curl_exec($ch);

//Close connection
curl_close($ch);

// Send an email with the Postmark-PHP library 

// Create the confirmation subject variable
$subject = 'Confirmation and Login Instructions';
 
// Create the confirmation message variable

$message = 'Hello ' . $name . '. To upload your files you will need the following information. ' . ' Your username is ' . $name .'. Your password is ' . $password . '. You will need to use a FTP client to login with this information. The server name you will use is s637275571.onlinehome.us and if you have any questions regarding setup please refer to the FTP client documentation.';

require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

// Example request
$client = new PostmarkClient("5df721c7-0179-4361-a973-c815e5fd62e7");

$sendResult = $client->sendEmail(
  "confirmation@brianshoemaker.info",
  "brianshoemaker7@gmail.com",
  $subject,
  $message
  
);

echo $result;

return view('confirmation');

 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}