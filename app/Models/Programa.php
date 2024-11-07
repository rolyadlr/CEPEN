<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programas';

    // Un programa tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'programa_id');
    }
}
