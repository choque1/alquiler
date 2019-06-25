<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class EstadoAlquiler extends Model
{
    protected $table = "estado_alquiler";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
