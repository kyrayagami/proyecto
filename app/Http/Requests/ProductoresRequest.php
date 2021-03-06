<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoresRequest extends Request
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
            'nombre' => 'min:3|required|unique:productores',
            'correo' => 'min:4|max:250|required|unique:productores',            
            'perfil' => 'min:30',
            'imagen_url' => 'required',
        ];
    }
}
