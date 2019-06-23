<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCuarto extends FormRequest
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
            'direccion' => 'required|max:50',
            'estado' => 'required|max:50',
            'telefono' => 'min:8|max:15|required',
            'descripcion' => 'required|max:300',
            'foto'=> 'max:200' ,             
        ];
        
    }
}
