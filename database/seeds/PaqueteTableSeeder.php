<?php

use Illuminate\Database\Seeder;
use App\Paquete;

class PaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Paquete::class, 100)->create()->make();
    }
}
