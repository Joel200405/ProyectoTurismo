<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_muestra_el_formulario_de_registro()
    {
        // Esta prueba verifica que la vista del formulario de registro se muestre correctamente.
        $response = $this->get('/register'); // Asegúrate de que esta sea la ruta correcta
        $response->assertStatus(200);
        $response->assertViewIs('register');
    }

    /** @test */
    public function test_registra_un_nuevo_usuario()
    {
        // Esta prueba verifica que un nuevo usuario se registre correctamente.
        // Comprueba que se redirija a la ruta de inicio de sesión con un mensaje de éxito.
        $data = [
            'nombre' => 'Juan Perez',
            'username' => 'juanperez',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $data); // Cambia '/register' por la ruta correcta

        $this->assertCount(1, User::all()); // Asegúrate de que el usuario se creó
        $this->assertEquals('Juan Perez', User::first()->nombre);
        $this->assertEquals('juanperez', User::first()->username);
        $this->assertTrue(Hash::check('password123', User::first()->password));

        $response->assertRedirect(route('login.index')); // Cambia esta ruta si es necesario
        $response->assertSessionHas('success', 'Usuario registrado exitosamente.');
    }

    /** @test */
    public function test_valida_datos_de_registro()
    {
        // Esta prueba comprueba que la validación funciona correctamente
        // cuando se envían datos inválidos en el formulario de registro.
        $data = [
            'nombre' => '',
            'username' => 'juanperez',
            'password' => 'pass',
            'password_confirmation' => 'wrongpassword',
        ];

        $response = $this->post('/register', $data); // Cambia '/register' por la ruta correcta

        $response->assertRedirect();
        $response->assertSessionHasErrors(['nombre', 'password']);
        $this->assertCount(0, User::all()); // Asegúrate de que no se creó ningún usuario
    }

    /** @test */
    public function test_requiere_nombre_de_usuario_unico()
    {
        // Esta prueba asegura que el nombre de usuario debe ser único.
        // Verifica que no se cree un segundo usuario con el mismo nombre de usuario.
        User::create([
            'nombre' => 'Juan Perez',
            'username' => 'juanperez',
            'password' => Hash::make('password123'),
        ]);

        $data = [
            'nombre' => 'Maria Lopez',
            'username' => 'juanperez', // Nombre de usuario duplicado
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $data); // Cambia '/register' por la ruta correcta

        $response->assertRedirect();
        $response->assertSessionHasErrors(['username']);
        $this->assertCount(1, User::all()); // Asegúrate de que no se creó un segundo usuario
    }
}