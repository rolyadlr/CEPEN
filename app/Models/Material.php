<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
