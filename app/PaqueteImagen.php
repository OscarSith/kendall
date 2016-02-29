<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaqueteImagen extends Model
{
	protected $table = 'paquete_imagenes';

	protected $fillable = [
		'paquete_id',
		'imagen',
		'imagen_chica',
		'estado'
	];
}
