<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_Usuario extends Model
{
    protected $table = 'tipo_usuarios';
    protected $fillable = ['nombre'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
