<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase; // Limpia la base de datos después de cada prueba

    /**
     * Prueba que verifica si la página de inicio de sesión se carga correctamente.
     */
    public function test_la_pagina_de_login_se_carga_correctamente()
    {
        // Hace una petición GET a la ruta de login
        $response = $this->get('/login');

        // Verifica que la petición tiene un estatus 200 (OK)
        $response->assertStatus(200);

        // Verifica que se carga la vista de login
        $response->assertViewIs('login');
    }

    /**
     * Prueba que verifica que el inicio de sesión falla con credenciales inválidas.
     */
    public function test_el_login_falla_con_credenciales_invalidas()
    {
        // Simular un intento de login con credenciales incorrectas
        $response = $this->post('/login', [
            'username' => 'usuariofalso',
            'password' => 'contraseñaincorrecta',
        ]);

        // Verificar que no se autentica
        $this->assertGuest();

        // Verificar que devuelve un error de credenciales
        $response->assertSessionHasErrors(['username']);
    }
}