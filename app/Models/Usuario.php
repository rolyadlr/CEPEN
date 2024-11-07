<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    // Un usuario tiene un rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    // Un usuario tiene muchas inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'usuario_id');
    }

    // Un usuario puede tener muchas notificaciones
    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class, 'usuario_id');
    }
}
