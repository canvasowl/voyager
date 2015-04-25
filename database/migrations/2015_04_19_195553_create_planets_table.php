<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Earth
		Schema::create('planets', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('diameter');
            $table->integer('radius');
            $table->string('type');
            $table->double('gravity');
            $table->integer('distance_from_sun');
            $table->integer('orbital_period');
            $table->boolean('ring');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planets');
	}

}
