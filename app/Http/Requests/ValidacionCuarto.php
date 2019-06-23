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
                'direccion' => 'required|max:50|unique',
                'estado' => 'required|max:50',
                'telefono' => 'requeride|numeric|max:15|min:8',
                'descripcion' => 'requeride|max:300',
                'foto'=> 'mimes:jpeg,bmp,png,jpg'            
            ];
        
    }
}
