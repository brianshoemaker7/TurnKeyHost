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

$url = 'http://s637275571.onlinehome.us/newuser.php';
$fields = array(
    'name' => urlencode($_POST['name'],
    'password' => urlencode($_POST['password']),
    'domain' => urlencode($_POST['domain']),
    
);


//url-ify the data for the POST
// foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
// rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
        // return view ('/info');

		// return $result ;

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