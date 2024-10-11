<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ReservaMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que verifica que la tabla reservas se crea correctamente.
     */
    public function test_tabla_reservas_se_crea_correctamente()
    {
        // Ejecutar la migración
        $this->artisan('migrate');

        // Verificar que la tabla existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasTable('reservas')
        );
    }

    /**
     * Test que verifica que la columna 'nombre' existe en la tabla reservas.
     */
    public function test_columna_nombre_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'nombre' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'nombre')
        );
    }

    /**
     * Test que verifica que la columna 'email' existe en la tabla reservas.
     */
    public function test_columna_email_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'email' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'email')
        );
    }

    /**
     * Test que verifica que la columna 'telefono' existe en la tabla reservas.
     */
    public function test_columna_telefono_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'telefono' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'telefono')
        );
    }

    /**
     * Test que verifica que la columna 'destino_id' existe en la tabla reservas.
     */
    public function test_columna_destino_id_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'destino_id' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'destino_id')
        );
    }

    /**
     * Test que verifica que la columna 'user_id' existe en la tabla reservas.
     */
    public function test_columna_user_id_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'user_id' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'user_id')
        );
    }

    /**
     * Test que verifica que la columna 'fecha' existe en la tabla reservas.
     */
    public function test_columna_fecha_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'fecha' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'fecha')
        );
    }

    /**
     * Test que verifica que la columna 'personas' existe en la tabla reservas.
     */
    public function test_columna_personas_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'personas' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'personas')
        );
    }

    /**
     * Test que verifica que la columna 'comentarios' existe en la tabla reservas.
     */
    public function test_columna_comentarios_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'comentarios' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'comentarios')
        );
    }

    /**
     * Test que verifica que la columna 'estado' existe en la tabla reservas.
     */
    public function test_columna_estado_existe_en_tabla_reservas()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'estado' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('reservas', 'estado')
        );
    }
}