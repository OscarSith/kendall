<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paq_nombre');
            $table->string('paq_titulo');
            $table->decimal('paq_precio', 10, 2);
            $table->text('paq_descripcion');
            $table->string('pag_imagen_principal');
            $table->tinyInteger('paq_estado')->default(1);
            $table->integer('paq_categoria')->unsigned();
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
        Schema::drop('paquetes');
    }
}
