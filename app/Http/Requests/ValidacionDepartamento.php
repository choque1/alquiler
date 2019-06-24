<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionDepartamento extends FormRequest
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
            'preciopormes' => 'required|numeric',
            'direccion' => 'required|max:50',
            'tipo_id' => 'required',
            'condicion_id' => 'required',
            'descripcion' => 'required|max:300',
            'foto'=> 'max:200' ,             
        ];
    }
}
