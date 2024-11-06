<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermisoTable extends Migration
{
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->foreignId('rol_id')->constrained('roles')->onDelete('cascade');
            $table->foreignId('permiso_id')->constrained('permisos')->onDelete('cascade');
            $table->primary(['rol_id', 'permiso_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rol_permiso');
    }
}
