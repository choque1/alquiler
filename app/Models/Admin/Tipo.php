<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipo";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
