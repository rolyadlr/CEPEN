<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    // Una inscripción pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Una inscripción pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
