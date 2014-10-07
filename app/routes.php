<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('as'=>'loginform', 'uses'=>'HomeController@loginform'));

Route::post('login', array('as'=>'login', 'uses'=>'HomeController@login'));

Route::get('register', array('as'=>'register', 'uses'=>'RegisterController@reg'));

Route::post('regiform', array('as'=>'regiform', 'uses'=>'RegisterController@regiform'));

/*
Route::get('/', array('as'=>'HomeController',function(){
	return View::make('login');
}));
*/

/*Route::get('home', array('as'=>'home',function(){
	return View::make('home');
}));*/