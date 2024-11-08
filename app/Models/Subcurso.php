<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcurso extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'curso_id'];

    // Un subcurso pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
    
}

