<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que verifica que la migración de la tabla users se ejecuta correctamente.
     */
    public function test_migracion_crea_tabla_users()
    {
        // Ejecuta la migración
        $this->artisan('migrate');

        // Verifica que la tabla 'users' existe
        $this->assertTrue(Schema::hasTable('users'));
    }

    /**
     * Test que verifica que la tabla users tiene las columnas correctas.
     */
    public function test_tabla_users_tiene_columnas_correctas()
    {
        $this->artisan('migrate');

        // Verifica que la tabla 'users' tiene las columnas esperadas
        $this->assertTrue(Schema::hasColumn('users', 'id'));
        $this->assertTrue(Schema::hasColumn('users', 'nombre'));
        $this->assertTrue(Schema::hasColumn('users', 'username'));
        $this->assertTrue(Schema::hasColumn('users', 'password'));
        $this->assertTrue(Schema::hasColumn('users', 'google_id'));
        $this->assertTrue(Schema::hasColumn('users', 'is_admin'));
        $this->assertTrue(Schema::hasColumn('users', 'created_at'));
        $this->assertTrue(Schema::hasColumn('users', 'updated_at'));
    }

    /**
     * Test que verifica que el campo username es único.
     */
    public function test_username_debe_ser_unico()
    {
        $this->artisan('migrate');

        // Crea un usuario
        DB::table('users')->insert([
            'nombre' => 'Juan Pérez',
            'username' => 'juanperez',
            'password' => bcrypt('password123'),
            'google_id' => null,
            'is_admin' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Verifica que se lanza una excepción al intentar insertar un username duplicado
        $this->expectException(\Illuminate\Database\QueryException::class);
        DB::table('users')->insert([
            'nombre' => 'Ana Gómez',
            'username' => 'juanperez', // username duplicado
            'password' => bcrypt('password456'),
            'google_id' => null,
            'is_admin' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}