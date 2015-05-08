<?php 

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array (
			'nombre'    	=> 'Leo',
			'apellido' 		=> 'Lopez',
			'email'     	=> 'le.lopez@gmail.com',
			'password'  	=> \Hash::make('clave'),
			'tipo_usuario'	=> 'usuario'
		));
	}

}


?>