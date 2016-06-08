<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkCountriesToPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paquetes', function (Blueprint $table) {
            $table->foreign('paq_pais')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paquetes', function (Blueprint $table) {
            $table->dropForeign('paquetes_paq_pais_foreign');
        });
    }
}
