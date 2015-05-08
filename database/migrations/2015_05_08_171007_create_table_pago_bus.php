<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePagoBus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagos', function(Blueprint $table)
		{
			$table->increments('id_pago');
			$table->integer('cantidad_pagos');

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
		Schema::drop('pagos');
	}

}
