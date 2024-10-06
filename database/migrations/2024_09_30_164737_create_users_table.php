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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->string('google_id')->nullable();

            // Agregar la columna para distinguir entre usuario normal y administrador
            $table->boolean('is_admin')->default(false);  // false = usuario normal, true = administrador
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};