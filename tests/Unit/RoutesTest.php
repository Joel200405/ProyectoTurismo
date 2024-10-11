<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * Test que verifica que se puede enviar el formulario de login.
     */
    public function test_login_validate_route()
    {
        $response = $this->post('/login', [
            'username' => 'usuario',
            'password' => 'contraseña',
        ]);

        $response->assertStatus(302); // Redirección esperada
    }

    /**
     * Test que verifica que se carga la ruta de destinos.
     */
    public function test_destinos_index_route()
    {
        $response = $this->get('/destinos');

        $response->assertStatus(200);
        $response->assertViewIs('destinos.index'); // Asegúrate de que la vista es correcta
    }

    /**
     * Test que verifica que se carga la ruta de un destino específico.
     */
    public function test_destinos_show_route()
    {
        $destino = \App\Models\Destino::create([
            'nombre' => 'Destino de Prueba',
            // otros campos necesarios...
        ]);

        $response = $this->get("/destinos/{$destino->id}");

        $response->assertStatus(200);
        $response->assertViewIs('destinos.show');
    }

    /**
     * Test que verifica que se puede enviar el formulario de contacto.
     */
    public function test_contact_submit_route()
    {
        $response = $this->post('/contact', [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
            'mensaje' => 'Este es un mensaje de prueba.',
        ]);

        $response->assertStatus(302); // Redirección esperada
    }

    /**
     * Test que verifica que se puede almacenar una reserva.
     */
    public function test_reservas_store_route()
    {
        $response = $this->post('/reservas', [
            'nombre' => 'Ana',
            'email' => 'ana@example.com',
            'telefono' => '987654321',
            'destino_id' => 1, // Reemplaza '1' con un ID de destino válido
            'fecha' => '2024-11-10',
            'personas' => 2,
            'comentarios' => 'Sin preferencias especiales.',
        ]);

        $response->assertStatus(302); // Redirección esperada
    }

    /**
     * Test que verifica que se puede almacenar un nuevo usuario.
     */
    public function test_register_store_route()
    {
        $response = $this->post('/register', [
            'nombre' => 'Pedro',
            'username' => 'pedro',
            'password' => 'contraseña123',
            'is_admin' => false,
        ]);

        $response->assertStatus(302); // Redirección esperada
    }
}