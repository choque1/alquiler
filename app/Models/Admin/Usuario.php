<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['usuario','password','nombre'];
    protected $guarded = ['id'];
}
