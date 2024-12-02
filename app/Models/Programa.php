<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Programa extends Model
{
    protected $table = 'programas';
    protected $fillable = ['nombre', 'descripcion', 'duracion'];


    // Un programa tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'programa_id');
    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($model) {
        $model->slug = Str::slug($model->nombre);
    });
}

}
