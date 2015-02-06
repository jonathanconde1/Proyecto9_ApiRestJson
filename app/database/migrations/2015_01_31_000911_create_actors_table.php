<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actors', function(Blueprint $table)
		{
			Schema::create('actors', function(Blueprint $table)
			{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			});

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actors', function(Blueprint $table)
		{
			//
		});
	}

}
