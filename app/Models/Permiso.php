<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';

    // Un permiso puede pertenecer a muchos roles
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rol_permiso', 'permiso_id', 'rol_id');
    }
}
