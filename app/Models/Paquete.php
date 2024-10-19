<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();  // Llave primaria
            $table->string('nombre_paquete');  // Nombre del paquete
            $table->decimal('precio_paquete', 8, 2);  // Precio del paquete (hasta 999,999.99)
            $table->string('imagen_paquete')->nullable();  // Ruta de la imagen
            $table->timestamps();  // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
}
