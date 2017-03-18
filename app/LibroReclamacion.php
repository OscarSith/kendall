<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibroReclamacion extends Model
{
    protected $table = 'libro_reclamaciones';

    protected $fillable = [
        'fecha',
        'nro',
        'nombre',
        'ruc',
        'direccion',
        'nombre_reclamante',
        'domicilio_reclamante',
        'dni_reclamante',
        'telefono_reclamante',
        'email_reclamante',
        'tipo',
        'monto_reclamado',
        'descripcion',
        'tipo_disconformidad',
        'detalle',
        'periodo',
        'estado',
        'fecha_respuesta'
    ];
}
