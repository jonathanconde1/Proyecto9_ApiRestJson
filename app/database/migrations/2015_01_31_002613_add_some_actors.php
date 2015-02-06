<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeActors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		$woody = Actor::create(array(
			'name' => 'Woody Allen'
		));
		
//		$woody->Movies()->attach([1,2]);
		
		$diane = Actor::create(array(
			'name' => 'Diane Keaton'
		));
		
		//$diane->Movies()->attach([1,2]));
		
		$jack = Actor::create(array(
			'name' => 'Jack Nicholson'
		));
		
		//$jack->Movies()->attach([3]);


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
