<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';

    // Un material pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
