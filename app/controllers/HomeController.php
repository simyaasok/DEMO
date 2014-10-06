<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('login');
	}
	public function login()
	{
		//make the validator
		$validator = Validator::make(Input::all(),array(
				'username' 		=> 'required',
				'password' 		=> 'required|min:5',
			)
		);

		if($validator->fails()){
			//show errors
			//return Redirect::route('login');
			return View::make('hello');
		}else{
			$userdata = array('username'=>Input::get('username'),'password'=>Input::get('password'));
			}
			if(Auth::attempt($userdata))
			{
			// return Redirect::route('home')->with('global','Login Successfully!');
				return View::make('home');
		}
		else
		{
           return View::make('login');
		}
	}

}
