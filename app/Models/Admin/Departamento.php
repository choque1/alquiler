<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = "departamentos";
    protected $fillable = ['direccion','estado','telefono','descripcion','foto'];

    public function scopeEstado($query,$estado){
        if($estado)
           return $query->where('estado','LIKE', '%'.$estado.'%');
        
    }
    
}
