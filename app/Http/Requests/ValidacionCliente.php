<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCliente extends FormRequest
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
            'nombre' => ['required', 'string','nombre', 'max:10'],
            'apellido' => ['required', 'string', 'apellido', 'max:30'],
            'ci' => ['required', 'string', 'ci', 'max:10'],
            'telefono'=>['required', 'enum', 'telefono', 'min:9'],
            'direccion' => ['required', 'string', 'direccion', 'max:10'],
            'estado'=>['required', 'boolean', 'estado', ],
        ];
    }
}
