<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = "condicion";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
