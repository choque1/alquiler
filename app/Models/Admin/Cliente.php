<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{   
    use SoftDeletes;

    protected $table = 'clientes';
    protected $fillable = ['nombre', 'apellido', 'ci', 'telefono', 'direccion', 'clientes'];

    public function roles() {
        return $this->belongsToMany(\jeremykenedy\LaravelRoles\Models\Role::class, 'role_cliente')->withPivot('id');
    }
}
