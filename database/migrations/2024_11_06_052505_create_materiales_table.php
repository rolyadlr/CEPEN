<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained('cursos')->onDelete('cascade');
            $table->string('nombre', 100);
            $table->string('archivo_url');
            $table->enum('tipo', ['documento', 'video']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materiales');
    }
}
