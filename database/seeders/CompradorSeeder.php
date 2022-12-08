<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comprador')->insert([
        	[
				'tipo_doc' => 1,
	        	'documento' => 70218511,
	        	'nombre' => 'Alex Oscar',
	        	'apellido' => 'Gamarra Solis',
	        	'telefono' => 943124351,
	        	'correo' => 'alex@gmail.com',
	        	'direccion' => 'Jr. Ramón Castilla 110'
        	],
        	[
				'tipo_doc' => 2,
	        	'documento' => 10870356,
	        	'nombre' => 'María Perla',
	        	'apellido' => 'Saruc Main',
	        	'telefono' => 952312435,
	        	'correo' => 'maria@gmail.com',
	        	'direccion' => 'Jr. Manuel Ruíz 230'
        	],
        	[
				'tipo_doc' => 1,
	        	'documento' => 23219913,
	        	'nombre' => 'Julio Ramón',
	        	'apellido' => 'Quiroga Hasher',
	        	'telefono' => 977123331,
	        	'correo' => 'julio@gmail.com',
	        	'direccion' => 'Jr. Enrique Palacios 202'
        	],
        	[
				'tipo_doc' => 1,
				'documento' => 80218511,
        		'nombre' => 'Mario Idalgo',
				'apellido' => 'Cuerbo Nieto',
				'telefono' => 932112351,
				'correo' => 'mario@gmail.com',
				'direccion' => 'Jr. Manuel Ruiz 800'
        	],
        	[
				'tipo_doc' => 1,
				'documento' => 62215777,
        		'nombre' => 'María Rosa',
        		'apellido' => 'Jara Uri',
				'telefono' => 951774351,
				'correo' => 'maría@gmail.com',
				'direccion' => 'Jr. Ramón Castilla 401'
        	]
        ]);
    }
}
