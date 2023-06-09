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
        Schema::create('relations', function (Blueprint $table) {
            $table->id();$table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('period_id');
            // Puedes agregar más columnas para los datos de la relación aquí
            
            // Relación con la tabla users
            $table->foreign('user_id')->references('id')->on('users');
            
            // Relación con la tabla periods
            $table->foreign('period_id')->references('id')->on('periods');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relations');
    }
};
