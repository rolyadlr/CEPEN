<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
