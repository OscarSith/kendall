<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LibroReclamacionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'ruc' => 'required|digits_between:8,12',
            'direccion' => 'required',
            'nombre_reclamante' => 'required',
            'domicilio_reclamante' => 'required',
            'dni_reclamante' => 'required|digits_between:8,15',
            'telefono_reclamante' => 'required',
            'email_reclamante' => 'required',
            'tipo' => 'required|in:PRODUCTO,SERVICIO',
            'monto_reclamado' => 'required',
            'descripcion' => 'required',
            'tipo_disconformidad' => 'required|in:RECLAMO,QUEJA',
            'detalle' => 'required',
            'periodo' => 'required'
        ];
    }
}
