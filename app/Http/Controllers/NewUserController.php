<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NewUser;

class NewUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $post_data = $request->all();
		
		$NewUser = new App\NewUser();
		$NewUser->name = $post_data['name'];
		$NewUser->email = $post_data['email'];
		$NewUser->password = $post_data['password'];
		$NewUser->domain = $post_data['domain'];
		$NewUser->street = $post_data['street'];
		$NewUser->city = $post_data['city'];
		$NewUser->state = $post_data['state'];
		$NewUser->zipcode = $post_data['zipcode'];
		$NewUser->save();
		return view('/info');
	}
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        
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