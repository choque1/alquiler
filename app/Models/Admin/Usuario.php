<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
    'name', 'email', 'password', 'estado', 'aescrypt', 

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

    public function roles() {
        return $this->belongsToMany(\jeremykenedy\LaravelRoles\Models\Role::class, 'role_usuario')->withPivot('id');
    }
}
