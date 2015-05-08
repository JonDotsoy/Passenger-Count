<?php 

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array (
			'nombre'    	=> 'Renato',
			'apellido' 		=> 'Varas',
			'email'     	=> 'ren.varas@gmail.com',
			'password'  	=> \Hash::make('clave'),
			'tipo_usuario'	=> 'admin'
		));
	}

}


?>