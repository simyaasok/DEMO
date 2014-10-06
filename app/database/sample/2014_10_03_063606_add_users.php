<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('user')->insert(array(
			'name'=>'simya',
			'address'=>'thejas,vengeri',
			'password'=>Hash::make('simya')
			));
		DB::table('user')->insert(array(
			'name'=>'neethu',
			'address'=>'ramanattukara',
			'password'=>hash::make('neethu')
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('user')->where('name','=','simya')->delete();
		DB::table('user')->where('name','=','simya')->delete();
	}

}
