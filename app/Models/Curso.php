<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function materiales()
    {
        return $this->hasMany(Material::class);
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
