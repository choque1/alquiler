<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";
    protected $fillable = ['modelo','preciopormes','direccion','tipo','descripcion','foto'];

    public function scopeTipo($query,$tipo){
        if($tipo)
           return $query->where('tipo','LIKE', '%'.$tipo.'%');
        
    }
    
}
