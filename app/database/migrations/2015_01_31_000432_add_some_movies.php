<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeMovies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Movie::create(array(
		'name' => 'Annie Hall',
		'release_year' => '1977'
		));
		Movie::create(array(
		'name' => ' Manhattan ',
		'release_year' => '1978'
		));

	Movie::create(array(
	'name' => 'The Shining',
	'release_year' => '1980'
	));



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
