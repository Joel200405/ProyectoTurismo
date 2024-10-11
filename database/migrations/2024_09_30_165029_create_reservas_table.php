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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->foreignId('destino_id')->constrained();
            $table->foreignId('user_id')->constrained('users');
            $table->date('fecha');
            $table->integer('personas');
            $table->text('comentarios')->nullable();
            $table->string('estado', 50)->default('pendiente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};