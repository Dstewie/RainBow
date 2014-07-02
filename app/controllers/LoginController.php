<?php

class LoginController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */

	public function registration(){
		
		return View::make('login.registr');
	
	}
	
	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	 
	public function store()
	{
		$rules = array(
			'u_name' => 'required|alpha_num|between:3,10|unique:users,username',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|alpha_num|between:4,12'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$user = new User;
		$user->email = Input::get('email');
		$user->username = Input::get('u_name');
		$user->password = Hash::make(Input::get('password'));
		
		return View::make('login.main');
	}
	
	public function login(){
		if (Auth::attempt(array(username => 'u_name', password => 'password', true))){
			return View::make();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /login/{id}
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
	 * GET /login/{id}/edit
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
	 * PUT /login/{id}
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
	 * DELETE /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}