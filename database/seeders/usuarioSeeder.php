<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;

class usuarioSeeder extends Seeder
{
    public function run()
    {
        // Obtener los roles
        $adminRole = Rol::where('nombre', 'admin')->first();
        $docenteRole = Rol::where('nombre', 'docente')->first();
        $estudianteRole = Rol::where('nombre', 'estudiante')->first();

        // Crear usuarios y asignarles roles
        Usuario::create([
            'name' => 'Admin1',
            'email' => 'admin1@example.com',
            'password' => Hash::make('contraseña_admin1'),
            'rol_id' => $adminRole->id
        ]);

        Usuario::create([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('contraseña_admin2'),
            'rol_id' => $adminRole->id
        ]);

        Usuario::create([
            'name' => 'Docente1',
            'email' => 'docente1@example.com',
            'password' => Hash::make('contraseña_docente1'),
            'rol_id' => $docenteRole->id
        ]);

        Usuario::create([
            'name' => 'Docente2',
            'email' => 'docente2@example.com',
            'password' => Hash::make('contraseña_docente2'),
            'rol_id' => $docenteRole->id
        ]);

        Usuario::create([
            'name' => 'Docente3',
            'email' => 'docente3@example.com',
            'password' => Hash::make('contraseña_docente3'),
            'rol_id' => $docenteRole->id
        ]);

        Usuario::create([
            'name' => 'Estudiante1',
            'email' => 'estudiante1@example.com',
            'password' => Hash::make('contraseña_estudiante1'),
            'rol_id' => $estudianteRole->id
        ]);

        Usuario::create([
            'name' => 'Estudiante2',
            'email' => 'estudiante2@example.com',
            'password' => Hash::make('contraseña_estudiante2'),
            'rol_id' => $estudianteRole->id
        ]);

        Usuario::create([
            'name' => 'Estudiante3',
            'email' => 'estudiante3@example.com',
            'password' => Hash::make('contraseña_estudiante3'),
            'rol_id' => $estudianteRole->id
        ]);

        Usuario::create([
            'name' => 'Estudiante4',
            'email' => 'estudiante4@example.com',
            'password' => Hash::make('contraseña_estudiante4'),
            'rol_id' => $estudianteRole->id
        ]);
    }
}
