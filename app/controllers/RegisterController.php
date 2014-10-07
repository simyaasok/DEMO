<?php

class RegisterController extends BaseController
 {
 	public function reg()
 	{
 		return View::make('regview');
 	}

 	public function regiform()
 	{
 		//make the validator
		$validator = Validator::make(Input::all(),array(
				'username' 		=> 'required',
				'password' 		=> 'required|min:5',
				'address' 	=> 'required'
			)
		);

		if($validator->fails()){
			//show errors
			return Redirect::route('register')->withErrors($validator)->withInput();
		}else{
			//insert a record
			$username = Input::get('username');
			$pass = Input::get('password');
			$address = Input::get('address');

			//create a post object and save data
			$post = new User;
			$post->username = $username;
			$post->password = Hash::make($pass);
			$post->address = $address;

			$post->save();
			return Redirect::route('loginform')->with('global','Saved Successfully!');
		}
 	}	

 }