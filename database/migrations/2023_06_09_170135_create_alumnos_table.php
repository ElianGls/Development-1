<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campus_id');
            $table->unsignedBigInteger('career_id');
            $table->unsignedBigInteger('modality_id');
            $table->unsignedBigInteger('semester_id');
            // Aquí puedes agregar más columnas para los datos de los alumnos
            
            // Relación con la tabla campuses
            $table->foreign('campus_id')->references('id')->on('campuses');
            
            // Relación con la tabla careers
            $table->foreign('career_id')->references('id')->on('careers');
            
            // Relación con la tabla modalities
            $table->foreign('modality_id')->references('id')->on('modalities');
            
            // Relación con la tabla semesters
            $table->foreign('semester_id')->references('id')->on('semesters');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
