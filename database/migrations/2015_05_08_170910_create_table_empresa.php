<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa', function(Blueprint $table)
		{
			$table->increments('id_empresa');
			$table->string('nombre_emp', 50);
			$table->string('rut_empresa',11);
			$table->integer('telefono_empresa');
			$table->string('correo_emp', 60);
			$table->string('direccion_emp');
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
		Schema::drop('empresa');
	}

}
