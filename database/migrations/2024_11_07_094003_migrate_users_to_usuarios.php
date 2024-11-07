<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MigrateUsersToUsuarios extends Migration
{
    public function up()
    {
        // Obtener todos los usuarios de la tabla `users`
        $users = DB::table('users')->get();
        
        foreach ($users as $user) {
            // Insertar en la tabla `usuarios` mapeando correctamente las columnas
            DB::table('usuarios')->insert([
                'id' => $user->id,
                'nombre' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'rol_id' => null, // Ajustar esto si tienes un mapeo o un valor predeterminado
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ]);
        }
    }

    public function down()
    {
        // Lógica para revertir la migración si es necesario
        DB::table('usuarios')->truncate(); // Esto eliminará todos los registros de `usuarios`
    }
}
