<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroReclamacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_reclamaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha');
            $table->char('nro', 16);
            $table->string('nombre');
            $table->string('ruc', 11);
            $table->string('direccion');
            $table->string('nombre_reclamante');
            $table->string('domicilio_reclamante');
            $table->string('dni_reclamante', 15);
            $table->string('telefono_reclamante');
            $table->string('email_reclamante');
            $table->string('menor_reclamante');
            $table->string('tipo', 10);
            $table->decimal('monto_reclamado', 10, 2);
            $table->string('descripcion');
            $table->string('tipo_disconformidad', 10);
            $table->mediumText('detalle');
            $table->string('periodo');
            // 1 -> Pendiente de aprovacion, 2 -> Aprovado, 3 -> Desaprovado
            $table->tinyInteger('estado')->default(1);
            $table->timestamp('fecha_respuesta');

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
        Schema::drop('libro_reclamaciones');
    }
}
