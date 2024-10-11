<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Destino;
use App\Models\User;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class ReservasControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_muestra_el_indice_de_reservas()
    {
        // Verifica que se muestre correctamente la vista del índice de reservas
        $response = $this->get(route('reservas.index')); // Cambia '/reservas' por la ruta correcta
        $response->assertStatus(200);
        $response->assertViewIs('reservas.indexReserva');
    }

    /**
     * Prueba para crear una reserva con un usuario inexistente (debe fallar)
     */
    public function test_no_puede_crear_reserva_con_usuario_inexistente()
    {
        $destino = Destino::factory()->create();

        $this->expectException(\Illuminate\Database\QueryException::class);

        // Intentar crear una reserva con un usuario inexistente
        Reserva::create([
            'nombre' => 'Juan Perez',
            'email' => 'juan@example.com',
            'telefono' => '123456789',
            'destino_id' => $destino->id,
            'user_id' => 9999, // ID de usuario inexistente
            'fecha' => '2024-10-20',
            'personas' => 4,
        ]);
    }
}