<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationPsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informationPs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('num_empleado');
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('rfc');
			$table->string('curp');
			$table->date('fecha_nacimiento');
			$table->string('nss');
			$table->string('domicilio');
			$table->string('estado_civil');
			$table->integer('edad');
			$table->string('sexo');
			$table->integer('tel_casa');
			$table->integer('tel_celular');
			$table->string('email');
			$table->string('tynlconducir');
			$table->string('nacionalidad');
			$table->string('dpviajar');
			$table->binary('acta_nacimiento');
			$table->binary('tynlconducirA');
			$table->binary('curpA');
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
		Schema::drop('informationPs');
	}

}
