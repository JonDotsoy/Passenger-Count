<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('AdminTableSeeder');
		 $this->call('UserTableSeeder');
		 $this->call('RecorridoTableSeeder');
		 $this->call('EmpresaTableSeeder');
		 $this->call('BusTableSeeder');
		 $this->call('PagosTableSeeder');
		 $this->call('ContadorTableSeeder');
	}

}
