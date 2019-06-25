<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ccontrato extends Model
{
    protected $table = "ccontratos";
    protected $fillable =['titulo','contenido'];
}
