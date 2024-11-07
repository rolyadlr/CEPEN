<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    // Una carrera tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'carrera_id');
    }
}
