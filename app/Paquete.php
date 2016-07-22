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
    	'paq_pais',
    	'paq_imagen_principal',
    	'paq_estado',
        'paq_tipo'
    ];

    public function scopeActives($q)
    {
        return $q->where('paq_estado', 1);
    }

    public function scopeGetByCategoria($q, $categoria_id, $fields)
    {
        return $q->join('countries', 'paquetes.paq_pais', '=', 'countries.id')
                 ->join('categorias', 'countries.co_categoria', '=', 'categorias.id')
                 ->where('categorias.id', $categoria_id)
                 ->take(8)
                 ->get($fields);
    }

    public function scopeGetByCountry($q, $country_id = null, $tipo = 'P')
    {
        if ($country_id == null) {
            return $q->actives()->where('paq_tipo', $tipo);
        }
        return $q->actives()->where('paq_pais', $country_id)->where('paq_tipo', $tipo);
    }
}
