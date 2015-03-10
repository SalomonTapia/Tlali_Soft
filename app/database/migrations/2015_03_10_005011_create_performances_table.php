<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerformancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('performances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('premio_reconocimiento');
			$table->string('resultado_evaluacion');
			$table->string('evaluacion_reemplazo');
			$table->string('motivo_acta_admin');
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
		Schema::drop('performances');
	}

}
