<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProgramasRequest extends Request
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
            'nombre' => 'min:3|required|unique:programas', 
            'logo'    =>'url',
            'img_programa'    =>'url',
            'img_app'    =>'url',
            'img_slider'    =>'url'
        ];
    }
}
