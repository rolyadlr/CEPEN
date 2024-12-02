<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Carrera extends Model
{
    protected $table = 'carreras';
    protected $fillable = ['nombre', 'descripcion', 'duracion'];


    // Una carrera tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'carrera_id');
        
    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($model) {
        $model->slug = Str::slug($model->nombre);
    });
}


}
