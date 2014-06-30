<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsuarioTableSeeder');
	}

}


class UsuarioTableSeeder extends Seeder{

    public function run(){
        //eliminar
        //DB::table('facultades')->where('nombre', 'Diseno')->delete();
        
        //insertar
        DB::table('pautas')->insert(array(
        	'evaluacion_fk' => '3',
        	'fecha' => '2014-07-02',
        	'ruta' => 'https://dl.dropboxusercontent.com/u/14411088/pauta_control_test'
        ));
    }
}
