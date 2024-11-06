<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
