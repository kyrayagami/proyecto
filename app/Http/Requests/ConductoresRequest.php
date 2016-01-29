<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConductoresRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'min:3|required|uniqued:conductores',
            'correo' => 'min:4|max:250|required|unique:conductores',
            'estatus'=> 'required',
            'perfil' => 'min:30',
            'imagen_url' => 'required',
        ];
    }
}
