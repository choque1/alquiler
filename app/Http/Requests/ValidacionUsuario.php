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
<<<<<<< HEAD
            'nombre' => 'required|max:20',
            'ci' => 'required|max:15',
            'email' => 'required|max:30',
            'estado' => 'required|max:50',
            'fechadenacimiento' => 'required|max:20',
            'telefono'=>'min:8|max:15|required',
=======
            'usuario' => 'required|max:50',
            'password' => 'required|password|max:50',
            'nombre' => 'requeride|max:50',
>>>>>>> 103e7a31007780948eed39afb04667749a850c23
            
        ];
    }
}
