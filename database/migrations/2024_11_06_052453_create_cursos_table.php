<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->integer('duracion');
            $table->foreignId('programa_id')->nullable()->constrained('programas')->onDelete('set null');
            $table->foreignId('carrera_id')->nullable()->constrained('carreras')->onDelete('set null');
            
            // Campos adicionales
            $table->integer('promedio_aprobacion')->default(0); // Para almacenar el promedio necesario para aprobar
            $table->string('documento')->nullable(); // Enlace a material del curso
            $table->text('anuncios')->nullable(); // Para anuncios o notas específicas del curso
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
