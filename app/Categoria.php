<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre'];

    // public function paquetes()
    // {
    // 	return $this->hasMany('App\Paquete', null, 'paq_categoria');
    // }
}
