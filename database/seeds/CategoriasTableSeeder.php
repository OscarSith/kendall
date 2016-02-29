<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias[] = ['nombre' => 'Nacionales'];
        $categorias[] = ['nombre' => 'Internacionales'];

        foreach ($categorias as $key => $value) {
        	Categoria::create($value);
        }
    }
}
