<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model
{
    protected $table = "cuartos";
    protected $fillable = ['direccion','estado','telefono','descripcion','foto'];
}
