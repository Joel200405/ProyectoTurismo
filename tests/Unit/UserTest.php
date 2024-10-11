<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que verifica que un usuario se puede crear correctamente.
     */
    public function test_se_puede_crear_un_usuario()
    {
        $user = User::create([
            'nombre' => 'Pedro Gómez',
            'username' => 'pedrogomez',
            'password' => bcrypt('password123'),
            'is_admin' => false,
        ]);

        $this->assertDatabaseHas('users', [
            'nombre' => 'Pedro Gómez',
            'username' => 'pedrogomez',
            'is_admin' => false,
        ]);
    }

    /**
     * Test que verifica que se oculta la contraseña al serializar el modelo.
     */
    public function test_contrasena_no_es_visible()
    {
        $user = User::create([
            'nombre' => 'Lucía Martínez',
            'username' => 'luciamartinez',
            'password' => bcrypt('password456'),
            'is_admin' => true,
        ]);

        $this->assertArrayNotHasKey('password', $user->toArray());
    }

    /**
     * Test que verifica que se lanza una excepción si se intenta crear un usuario sin un nombre.
     */
    public function test_se_requiere_nombre_al_crear_usuario()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'username' => 'sin_nombre',
            'password' => bcrypt('password789'),
            'is_admin' => false,
        ]);
    }

    /**
     * Test que verifica que se lanza una excepción si se intenta crear un usuario sin un username.
     */
    public function test_se_requiere_username_al_crear_usuario()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'nombre' => 'Sin Username',
            'password' => bcrypt('password789'),
            'is_admin' => false,
        ]);
    }

    /**
     * Test que verifica que se puede establecer el campo is_admin correctamente.
     */
    public function test_se_puede_establecer_is_admin()
    {
        $user = User::create([
            'nombre' => 'Carlos Ruiz',
            'username' => 'carlosruiz',
            'password' => bcrypt('password321'),
            'is_admin' => true,
        ]);

        $this->assertTrue($user->is_admin);
    }
}