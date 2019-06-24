<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
            'nombre' => 'required|max:20',
            'ci' => 'required|max:15',
            'usuario' => 'required|max:30',
            'password' => 'required|min:8|max:30',
            'fechadenacimiento' => 'required|max:20',
            'telefono'=>'min:8|max:15|required',
            'tipousuario_id'=>'required'
                    
        ];
    }
}
