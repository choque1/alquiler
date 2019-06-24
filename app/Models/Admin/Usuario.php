<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = [
    'nombre', 'ci', 'usuario', 'password','fechadenacimiento', 'telefono', 'tipousuario_id', 

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hash',
    ];
    public function tipoUsuario() {
        return $this->belongsTo('Alquiler\Tipo_Usuario', 'idTipoUsuario');
    }

    public function scopeOfType($query, $id){
        if (trim($id)!="")
        {
            $query->where('id', $id);
        }
    }
}
