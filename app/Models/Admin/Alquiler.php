<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = "alquileres";
    protected $fillable =['fecha_registro','fecha_entrega','pago','departamento_id','estado_id','cliente_id'];
    public function departamentos()
    {
        return $this->hasOne(Departamento::class,'id','departamento_id');
    }
    public function clientes()
    {
        return $this->hasOne(Cliente::class,'id','cliente_id');
    }
    public function estados ()
    {
        return $this->hasOne(EstadoAlquiler::class,'id','estado_id');
    }
}
