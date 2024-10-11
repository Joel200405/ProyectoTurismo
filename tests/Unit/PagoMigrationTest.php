<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PagoMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que verifica que la tabla pagos se crea correctamente.
     */
    public function test_tabla_pagos_se_crea_correctamente()
    {
        // Ejecutar la migración
        $this->artisan('migrate');

        // Verificar que la tabla existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasTable('pagos')
        );
    }

    /**
     * Test que verifica que la columna 'reserva_id' existe en la tabla pagos.
     */
    public function test_columna_reserva_id_existe_en_tabla_pagos()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'reserva_id' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('pagos', 'reserva_id')
        );
    }

    /**
     * Test que verifica que la columna 'monto' existe en la tabla pagos.
     */
    public function test_columna_monto_existe_en_tabla_pagos()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'monto' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('pagos', 'monto')
        );
    }

    /**
     * Test que verifica que la columna 'metodo_pago' existe en la tabla pagos.
     */
    public function test_columna_metodo_pago_existe_en_tabla_pagos()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'metodo_pago' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('pagos', 'metodo_pago')
        );
    }

    /**
     * Test que verifica que la columna 'estado_pago' existe en la tabla pagos.
     */
    public function test_columna_estado_pago_existe_en_tabla_pagos()
    {
        $this->artisan('migrate');

        // Verificar que la columna 'estado_pago' existe
        $this->assertTrue(
            DB::getSchemaBuilder()->hasColumn('pagos', 'estado_pago')
        );
    }
}