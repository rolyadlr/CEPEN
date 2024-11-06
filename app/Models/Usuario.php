<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function rol()
    {
        return $this->belongsTo(Role::class);
    }

    public function cursosInscritos()
    {
        return $this->belongsToMany(Curso::class, 'inscripciones');
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class);
    }
}

