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
		return view('confirmation');



$data = array($Account->name = $request->name,
			  $Account->email = $request->email, 
			  $Account->password = $request->password;
			  $Account->domain = $request->domain;
			  $Account->street = $request->street;
			  $Account->city = $request->city;
			  $Account->state = $request->state;
			  $Account->zipcode = $request->zipcode;);

$data_json = json_encode($data);

		// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://s637275571.onlinehome.us");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Send the request & save response to $resp
$response  = curl_exec($ch);
// Close request to clear up some resources
curl_close($ch);
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