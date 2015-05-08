<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contador', function(Blueprint $table)
		{
			$table->increments('id_contador');
			$table->integer('contador');
			$table->dateTime('fecha_conteo');
			$table->string('coordenada_x');
			$table->string('coordenada_y');

			$table->integer('id_operario')->unsigned();
			$table->foreign('id_operario')
				->references('id_operario')
				->on('users')
				->onDelete('cascade');

			$table->integer('id_bus')->unsigned();
			$table->foreign('id_bus')
					->references('id_bus')
					->on('bus')
					->onDelete('cascade');

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
		Schema::drop('contador');
	}

}
