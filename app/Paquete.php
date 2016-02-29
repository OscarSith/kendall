<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
	protected $table = 'paquetes';

    protected $fillable = [
    	'paq_nombre',
    	'paq_titulo',
    	'paq_precio',
    	'paq_descripcion',
    	'paq_categoria',
    	'pag_imagen_principal',
    	'paq_estado',
    ];
}
