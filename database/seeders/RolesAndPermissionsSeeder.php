<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;
use App\Models\Permiso;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Crear Roles
        $adminRole = Rol::create(['nombre' => 'admin']);
        $docenteRole = Rol::create(['nombre' => 'docente']);
        $estudianteRole = Rol::create(['nombre' => 'estudiante']);

        // Crear Permisos
        $verPermiso = Permiso::create(['nombre' => 'ver']);
        $crearPermiso = Permiso::create(['nombre' => 'crear']);
        $modificarPermiso = Permiso::create(['nombre' => 'modificar']);
        $eliminarPermiso = Permiso::create(['nombre' => 'eliminar']);

        // Asignar Permisos a Roles
        $adminRole->permisos()->attach([$verPermiso->id, $crearPermiso->id, $modificarPermiso->id, $eliminarPermiso->id]);
        $docenteRole->permisos()->attach([$verPermiso->id, $modificarPermiso->id]);
        $estudianteRole->permisos()->attach([$verPermiso->id]);
    }
}
