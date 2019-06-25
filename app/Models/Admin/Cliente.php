<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{   
    

    protected $table = 'clientes';
    protected $fillable = ['nombre', 'apellido', 'ci', 'telefono', 'direccion', 'rol_id'];

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_cliente')->withPivot('id');
    }
}
