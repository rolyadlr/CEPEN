<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInUsuariosTable extends Migration
{
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('nombre', 'name');
            // Renombrar otras columnas según sea necesario
        });
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('name', 'nombre');
            // Revertir otros nombres de columnas según sea necesario
        });
    }
}
