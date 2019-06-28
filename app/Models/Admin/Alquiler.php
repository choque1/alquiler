<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = "alquileres";
    protected $fillable =['fecha_registro','fecha_entrega','pago','departamento_id','estado_id','cliente_id'];
    
}
