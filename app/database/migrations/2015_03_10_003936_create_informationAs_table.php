<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationAsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informationAs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('doctorado');
			$table->string('maestria');
			$table->string('especialidad');
			$table->string('lic_ing');
			$table->string('tsu');
			$table->string('carrera-tecnica');
			$table->string('bachillerato');
			$table->binary('doctoradoA');
			$table->binary('maestriaA');
			$table->binary('especialidadA');
			$table->binary('lic_ingA');
			$table->binary('tsuA');
			$table->binary('carrera_tecnicaA');
			$table->binary('bachilleratoA');
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
		Schema::drop('informationAs');
	}

}
