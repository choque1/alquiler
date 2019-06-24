<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;


class Tipo_Usuario extends Model
{
    protected $table = 'tipo__usuarios';
    protected $fillable = ['nombre'];
    
    
}
