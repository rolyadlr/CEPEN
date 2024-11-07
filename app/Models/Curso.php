<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    // Un curso puede pertenecer a un programa
    public function programa()
    {
        return $this->belongsTo(Programa::class, 'programa_id');
    }

    // Un curso puede pertenecer a una carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }

    // Un curso tiene muchos materiales
    public function materiales()
    {
        return $this->hasMany(Material::class, 'curso_id');
    }

    // Un curso tiene muchas inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'curso_id');
    }
}
