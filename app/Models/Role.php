<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'rol_permiso');
    }
}
