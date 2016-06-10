<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
    	'co_nombre',
    	'co_categoria',
    	'co_imagen',
    	'co_nombre_slug',
    ];
}
