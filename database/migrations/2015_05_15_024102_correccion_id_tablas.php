<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*******************************************************************************
* Corrección de Los ID según Laravel.                                          *
*                                                                              *
* Realiza un cambio de los claves primarias, por el nombre `id`. En función de *
* Corregir las funcionalidades nativas para Laravel.                           *
*******************************************************************************/
class CorreccionIdTablas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

    Schema::table('users', function($table){
      $table->renameColumn('id_operario','id');
    });

    Schema::table('empresa', function($table){
      $table->renameColumn('id_empresa','id');
    });

    Schema::table('recorrido', function($table){
      $table->renameColumn('id_recorrido','id');
    });

    Schema::table('bus', function($table){
      $table->renameColumn('id_bus','id');
    });

    Schema::table('pagos', function($table){
      $table->renameColumn('id_pago','id');
    });

    Schema::table('contador', function($table){
      $table->renameColumn('id_contador','id');
    });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {

    Schema::table('users', function($table){
      $table->renameColumn('id', 'id_operario');
    });

    Schema::table('empresa', function($table){
      $table->renameColumn('id', 'id_empresa');
    });

    Schema::table('recorrido', function($table){
      $table->renameColumn('id', 'id_recorrido');
    });

    Schema::table('bus', function($table){
      $table->renameColumn('id', 'id_bus');
    });

    Schema::table('pagos', function($table){
      $table->renameColumn('id', 'id_pago');
    });

    Schema::table('contador', function($table){
      $table->renameColumn('id', 'id_contador');
    });

	}

}
