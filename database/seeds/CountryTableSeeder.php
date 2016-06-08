<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
        	// NACIONALES
        	[
        		'co_nombre' => 'AREQUIPA',
        		'co_categoria' => 1,
        		'co_imagen' => 'arequipa.jpg',
        		'co_nombre_slug' => str_slug('AREQUIPA')
        	],
        	[
        		'co_nombre' => 'AYACUCHO',
        		'co_categoria' => 1,
        		'co_imagen' => 'ayacucho.jpg',
        		'co_nombre_slug' => str_slug('AYACUCHO')
        	],
        	[
        		'co_nombre' => 'CAJAMARCA',
        		'co_categoria' => 1,
        		'co_imagen' => 'cajamarca.jpg',
        		'co_nombre_slug' => str_slug('CAJAMARCA')
        	],
        	[
        		'co_nombre' => 'CHICLAYO',
        		'co_categoria' => 1,
        		'co_imagen' => 'chiclayo.jpg',
        		'co_nombre_slug' => str_slug('CHICLAYO')
        	],
			[
				'co_nombre' => 'CUSCO',
				'co_categoria' => 1,
				'co_imagen' => 'cusco.jpg',
				'co_nombre_slug' =>str_slug('CUSCO')
			],
			[
				'co_nombre' => 'HUARAZ',
				'co_categoria' => 1,
				'co_imagen' => 'huaraz.jpg',
				'co_nombre_slug' => str_slug('HUARAZ')
			],
			[
				'co_nombre' => 'IQUITOS',
				'co_categoria' => 1,
				'co_imagen' => 'iquitos.jpg',
				'co_nombre_slug' => str_slug('IQUITOS')
			],
			[
				'co_nombre' => 'LIMA',
				'co_categoria' => 1,
				'co_imagen' => 'lima.jpg',
				'co_nombre_slug' => str_slug('LIMA')
			],
			[
				'co_nombre' => 'PLAYAS',
				'co_categoria' => 1,
				'co_imagen' => 'playas.jpg',
				'co_nombre_slug' => str_slug('PLAYAS')
			],
			[
				'co_nombre' => 'PUERTO MALDONADO',
				'co_categoria' => 1,
				'co_imagen' => 'puerto_maldonado.jpg',
				'co_nombre_slug' => str_slug('PUERTO MALDONADO')
			],
			[
				'co_nombre' => 'PUNO',
				'co_categoria' => 1,
				'co_imagen' => 'puno.jpg',
				'co_nombre_slug' => str_slug('PUNO')
			],
			[
				'co_nombre' => 'TARAPOTO',
				'co_categoria' => 1,
				'co_imagen' => 'tarapoto.jpg',
				'co_nombre_slug' => str_slug('TARAPOTO')
			],
			[
				'co_nombre' => 'TRUJILLO',
				'co_categoria' => 1,
				'co_imagen' => 'trujillo.jpg',
				'co_nombre_slug' => str_slug('TRUJILLO')
			],
			[
				'co_nombre' => 'TUMBES',
				'co_categoria' => 1,
				'co_imagen' => 'tumbes.jpg',
				'co_nombre_slug' => str_slug('TUMBES')
			],

			// INTERNACIONALES
			[
				'co_nombre' => 'ARGENTINA',
				'co_categoria' => 2,
				'co_imagen' => 'argentina.jpg',
				'co_nombre_slug' => str_slug('ARGENTINA')
			],
			[
				'co_nombre' => 'ARUBA',
				'co_categoria' => 2,
				'co_imagen' => 'aruba.jpg',
				'co_nombre_slug' =>str_slug('ARUBA')
			],
			[
				'co_nombre' => 'BOLIVIA',
				'co_categoria' => 2,
				'co_imagen' => 'bolivia.jpg',
				'co_nombre_slug' => str_slug('BOLIVIA')
			],
			[
				'co_nombre' => 'BRASIL',
				'co_categoria' => 2,
				'co_imagen' => 'brasil.jpg',
				'co_nombre_slug' => str_slug('BRASIL')
			],
			[
				'co_nombre' => 'CHILE',
				'co_categoria' => 2,
				'co_imagen' => 'chile.jpg',
				'co_nombre_slug' =>str_slug('CHILE')
			],
			[
				'co_nombre' => 'COLOMBIA',
				'co_categoria' => 2,
				'co_imagen' => 'colombia.jpg',
				'co_nombre_slug' => str_slug('COLOMBIA')
			],
			[
				'co_nombre' => 'COSTA RICA',
				'co_categoria' => 2,
				'co_imagen' => 'costa_rica.jpg',
				'co_nombre_slug' => str_slug('COSTA RICA')
			],
			[
				'co_nombre' => 'CUBA',
				'co_categoria' => 2,
				'co_imagen' => 'cuba.jpg',
				'co_nombre_slug' => str_slug('CUBA')
			],
			[
				'co_nombre' => 'ECUADOR',
				'co_categoria' => 2,
				'co_imagen' => 'ecuador.jpg',
				'co_nombre_slug' => str_slug('ECUADOR')
			],
			[
				'co_nombre' => 'ESTADOS UNIDOS',
				'co_categoria' => 2,
				'co_imagen' => 'estados_unidos.jpg',
				'co_nombre_slug' => str_slug('ESTADOS UNIDOS')
			],
			[
				'co_nombre' => 'EUROPA',
				'co_categoria' => 2,
				'co_imagen' => 'europa.jpg',
				'co_nombre_slug' => str_slug('EUROPA')
			],
			[
				'co_nombre' => 'JAMAICA',
				'co_categoria' => 2,
				'co_imagen' => 'jamaica.jpg',
				'co_nombre_slug' => str_slug('JAMAICA')
			],
			[
				'co_nombre' => 'MÉXICO',
				'co_categoria' => 2,
				'co_imagen' => 'mexico.jpg',
				'co_nombre_slug' => str_slug('MÉXICO')
			],
			[
				'co_nombre' => 'PANAMÁ',
				'co_categoria' => 2,
				'co_imagen' => 'panama.jpg',
				'co_nombre_slug' => str_slug('PANAMÁ')
			],
			[
				'co_nombre' => 'PARAGUAY',
				'co_categoria' => 2,
				'co_imagen' => 'paraguay.jpg',
				'co_nombre_slug' => str_slug('PARAGUAY')
			],
			[
				'co_nombre' => 'REPÚBLICA DOMINICANA',
				'co_categoria' => 2,
				'co_imagen' => 'republica_dominicana.jpg',
				'co_nombre_slug' => str_slug('REPÚBLICA DOMINICANA')
			],
			[
				'co_nombre' => 'URUGUAY',
				'co_categoria' => 2,
				'co_imagen' => 'uruguay.jpg',
				'co_nombre_slug' => str_slug('URUGUAY')
			],
			[
				'co_nombre' => 'VENEZUELA',
				'co_categoria' => 2,
				'co_imagen' => 'venezuela.jpg',
				'co_nombre_slug' => str_slug('VENEZUELA')
			]
        ];

        foreach ($countries as $key => $rec) {
        	Country::create($rec);
        }
    }
}
