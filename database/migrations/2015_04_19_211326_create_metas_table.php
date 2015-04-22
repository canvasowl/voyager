<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metas', function(Blueprint $table)
		{
            $table->unsignedInteger('planet_id');
            $table->string('name');
            $table->string('img');
            $table->integer('diameter');
            $table->integer('radius');
            $table->string('type');
            $table->integer('gravity');
            $table->integer('distance_from_sun');
            $table->integer('orbital_period');
            $table->boolean('ring');
			$table->timestamps();

            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metas');
	}

}
