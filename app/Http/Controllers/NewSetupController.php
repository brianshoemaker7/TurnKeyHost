<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NewSetup;

class NewController extends Controller
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
		
		// 		add a new dot
		
		$NewSetup = new App\NewSetup();
		$NewSetup->name = $post_data['name'];
		$NewSetup->email = $post_data['email'];
		$NewSetup->password = $post_data['password'];
		$NewSetup->domain = $post_data['domain'];
		$NewSetup->street = $post_data['street'];
		$NewSetup->city = $post_data['city'];
		$NewSetup->state = $post_data['state'];
		$NewSetup->zipcode = $post_data['zipcode'];
		$NewSetup->save();
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