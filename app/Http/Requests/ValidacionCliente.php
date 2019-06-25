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
            'nombre' => 'required|string|max:10',
            'apellido' => 'required|string|max:30',
            'ci' => 'required|string|max:10',
            'telefono'=>'required|min:9',
            'direccion' => 'required|string|max:50',
        ];
    }
}
