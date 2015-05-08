<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bus', function(Blueprint $table)
		{
			$table->increments('id_bus');
			$table->string('patente_bus');
			$table->dateTime('hora_salida');
			$table->dateTime('hora_llegada');
			$table->string('nombre_chofer')->nullable();

			$table->integer('id_empresa')->unsigned();
			$table->foreign('id_empresa')
					->references('id_empresa')
					->on('empresa')
					->onDelete('cascade');

			$table->integer('id_recorrido')->unsigned();
			$table->foreign('id_recorrido')
					->references('id_recorrido')
					->on('recorrido')
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
		Schema::drop('bus');
	}

}
