<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CountryRequest extends Request
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
            'co_nombre' => 'required',
            'co_categoria' => 'required',
            'co_imagen' => 'required|file',
        ];
    }
}
