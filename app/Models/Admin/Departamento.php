<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";
    protected $fillable = ['preciopormes','direccion','tipo_id','condicion_id','descripcion','foto'];

    public function scopeEstado($query,$estado){
        if($estado)
           return $query->where('estado','LIKE', '%'.$estado.'%');
        
    }
    
}
