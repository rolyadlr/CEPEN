<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('curso_id')->constrained('cursos')->onDelete('cascade');
            $table->timestamp('fecha_inscripcion')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
}
