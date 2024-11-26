<?php

namespace Database\Seeders;

use App\Models\Usuario;  // Cambiado de User a Usuario
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuario::factory(10)->create();

        Usuario::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
