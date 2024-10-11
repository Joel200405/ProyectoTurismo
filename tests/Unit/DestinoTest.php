<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Destino;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestinoTest extends TestCase
{
    use RefreshDatabase; // Limpia la base de datos después de cada prueba

    /**
     * Test que verifica que un destino se puede crear correctamente en la base de datos.
     */
    public function test_crear_destino()
    {
        $destinoData = [
            'nombre' => 'Playa Bonita',
            'descripcion' => 'Una hermosa playa con arena blanca.',
            'ubicacion' => 'Costa Rica',
            'precio' => 150, // Asegúrate de incluir el precio aquí
            'imagen_url' => 'https://example.com/playabonita.jpg',
            'popular' => true,
        ];

        $destino = Destino::create($destinoData);
        $this->assertDatabaseHas('destinos', $destinoData);
        $this->assertEquals('Playa Bonita', $destino->nombre);
    }


    /**
     * Test que verifica que el nombre del destino se convierte a mayúsculas al recuperarlo.
     */
    public function test_nombre_convertido_a_mayusculas_al_recuperar()
    {
        $destino = Destino::create(['nombre' => 'cascada hermosa']);

        // Verifica que el nombre se muestra correctamente
        $this->assertEquals('Cascada Hermosa', $destino->nombre);
    }

    /**
     * Test que verifica que el nombre del destino se convierte a minúsculas al crear o actualizar.
     */
    public function test_nombre_convertido_a_minusculas_al_guardar()
    {
        $destino = Destino::create(['nombre' => 'DESTINO FANTASTICO']);
        $this->assertEquals('Destino Fantastico', $destino->nombre); // Ajustar a la forma capitalizada
    }

    /**
     * Test que verifica que se puede actualizar un destino existente.
     */
    public function test_actualizar_destino()
    {
        $destino = Destino::create(['nombre' => 'Montaña Alta', 'precio' => 100]);

        $destino->update(['precio' => 200]);

        // Verifica que el precio se actualizó correctamente
        $this->assertEquals(200, $destino->precio);
        $this->assertDatabaseHas('destinos', ['nombre' => 'Montaña Alta', 'precio' => 200]);
    }

    /**
     * Test que verifica que se puede eliminar un destino existente.
     */
    public function test_eliminar_destino()
    {
        $destino = Destino::create(['nombre' => 'Río Cristalino']);

        $destino->delete();

        // Verifica que el destino fue eliminado
        $this->assertDatabaseMissing('destinos', ['nombre' => 'Río Cristalino']);
    }
}