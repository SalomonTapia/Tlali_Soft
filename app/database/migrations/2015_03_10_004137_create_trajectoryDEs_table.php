<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrajectoryDEsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trajectoryDEs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('puesto_actual');
			$table->date('fecha_ingreso');
			$table->string('antiguedad');
			$table->double('sueldo');
			$table->string('area_departamento');
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
		Schema::drop('trajectoryDEs');
	}

}
