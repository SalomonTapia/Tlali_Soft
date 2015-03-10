<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationFsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informationFs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('personas_dependientes');
			$table->string('nombre_conyuge');
			$table->string('ocupacion_conyuge');
			$table->string('nombre_hijos');
			$table->string('ocupacion_hijos');
			$table->string('nombre_padre');
			$table->string('ocupacion_padre');
			$table->string('nombre_madre');
			$table->string('ocupacion_madre');
			$table->integer('tel_conyuge');
			$table->integer('tel_padre');
			$table->integer('tel_madre');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('informationFs');
	}

}
