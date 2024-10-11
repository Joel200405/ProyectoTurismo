<?php

namespace Tests\Unit;

use App\Models\Reserva;
use App\Models\Destino;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que verifica que se puede crear una reserva.
     */
    public function test_se_puede_crear_una_reserva()
    {
        $destino = Destino::create([
            'nombre' => 'Playa Bonita',
            'descripcion' => 'Una playa hermosa',
            'ubicacion' => 'Costa Rica',
            'precio' => 150.00,
            'imagen_url' => 'http://example.com/playa_bonita.jpg',
            'popular' => true,
        ]);

        $user = User::create([
            'nombre' => 'Juan Perez',
            'username' => 'juanperez',
            'password' => bcrypt('password123'),
        ]);

        $reserva = Reserva::create([
            'nombre' => 'Carlos López',
            'email' => 'carlos@example.com',
            'telefono' => '123456789',
            'destino_id' => $destino->id,
            'fecha' => '2024-10-20',
            'personas' => 4,
            'comentarios' => 'Deseo una habitación con vista al mar.',
            'user_id' => $user->id,
            'estado' => 'pendiente',
        ]);

        $this->assertDatabaseHas('reservas', [
            'nombre' => 'Carlos López',
            'email' => 'carlos@example.com',
            'telefono' => '123456789',
            'destino_id' => $destino->id,
            'fecha' => '2024-10-20',
            'personas' => 4,
            'comentarios' => 'Deseo una habitación con vista al mar.',
            'user_id' => $user->id,
            'estado' => 'pendiente',
        ]);
    }

    /**
     * Test que verifica la relación entre reserva y usuario.
     */
    public function test_reserva_tiene_un_usuario()
    {
        $destino = Destino::create([
            'nombre' => 'Lago Espejo',
            'descripcion' => 'Un lago tranquilo',
            'ubicacion' => 'Argentina',
            'precio' => 100.00,
            'imagen_url' => 'http://example.com/lago_espejo.jpg',
            'popular' => true,
        ]);

        $user = User::create([
            'nombre' => 'Sofía Ramírez',
            'username' => 'sofi_ramirez',
            'password' => bcrypt('password456'),
        ]);

        $reserva = Reserva::create([
            'nombre' => 'Luis Hernández',
            'email' => 'luis@example.com',
            'telefono' => '456123789',
            'destino_id' => $destino->id,
            'fecha' => '2024-12-15',
            'personas' => 3,
            'comentarios' => 'Ninguna.',
            'user_id' => $user->id,
            'estado' => 'pendiente',
        ]);

        $this->assertEquals($user->id, $reserva->user->id);
    }

    /**
     * Test que verifica que los campos son obligatorios al crear una reserva.
     */
    public function test_se_requiere_nombre_y_email_al_crear_reserva()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Reserva::create([
            'telefono' => '111222333',
            'destino_id' => 1,
            'fecha' => '2024-10-20',
            'personas' => 4,
            'comentarios' => 'Requiere confirmación.',
            'user_id' => null,
            'estado' => 'pendiente',
        ]);
    }
}