<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcursosTable extends Migration 
{ 
    public function up() 
    { 
        Schema::create('subcursos', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nombre'); 
            $table->text('descripcion')->nullable();
            $table->foreignId('curso_id')->constrained()->onDelete('cascade'); 
            $table->timestamps(); 
            }); 
        } 
        
        public function down() 
        { 
            Schema::dropIfExists('subcursos'); 
        } 
    }
