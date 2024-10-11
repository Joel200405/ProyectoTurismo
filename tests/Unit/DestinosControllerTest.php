<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Destino;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestinosControllerTest extends TestCase
{
    use RefreshDatabase; // Refresca la base de datos después de cada prueba

    /**
     * Prueba que verifica si se carga la página de índice de destinos
     * correctamente y si se pasa la lista de destinos a la vista.
     */
    public function test_muestra_pagina_indice_destinos_correctamente()
    {
        // Crea algunos destinos en la base de datos
        Destino::factory()->count(3)->create();
        
        // Hace una petición GET a la ruta de destinos
        $response = $this->get('/destinos');

        // Verifica que la petición tenga un estatus 200 (OK)
        $response->assertStatus(200);

        // Verifica que la vista que se carga sea la correcta
        $response->assertViewIs('destinos.index');

        // Verifica que los destinos que se pasan a la vista estén presentes
        $response->assertViewHas('destinos');
    }

    /**
     * Prueba que verifica si se muestra correctamente un solo destino
     * cuando se accede a la ruta de detalle de un destino.
     */
    public function test_muestra_destino_individual_correctamente()
    {
        // Crea un destino en la base de datos
        $destino = Destino::factory()->create();

        // Hace una petición GET a la ruta que muestra un solo destino
        $response = $this->get('/destinos/' . $destino->id);

        // Verifica que la petición tenga un estatus 200
        $response->assertStatus(200);

        // Verifica que se cargue la vista correcta
        $response->assertViewIs('destinos.show');

        // Verifica que el destino se pase correctamente a la vista
        $response->assertViewHas('destino', $destino);
    }

    /**
     * Prueba que verifica si se retorna un error 404 al intentar acceder
     * a un destino que no existe en la base de datos.
     */
    public function test_retornar_error_404_si_destino_no_existe()
    {
        // Intenta acceder a un destino con un ID inexistente
        $response = $this->get('/destinos/999');

        // Verifica que el estatus de la respuesta sea 404
        $response->assertStatus(404);
    }

    /**
     * Prueba que verifica si se muestra la vista de índice correctamente 
     * cuando no hay destinos en la base de datos.
     */
    public function test_muestra_indice_vacio_si_no_hay_destinos()
    {
        // Hace una petición GET a la ruta de destinos sin que haya destinos creados
        $response = $this->get('/destinos');

        // Verifica que la petición tenga un estatus 200
        $response->assertStatus(200);

        // Verifica que la vista que se carga sea la correcta
        $response->assertViewIs('destinos.index');

        // Verifica que la vista tenga una colección vacía de destinos
        $response->assertViewHas('destinos', function ($destinos) {
            return $destinos->isEmpty();
        });
    }

    /**
     * Prueba que verifica si al acceder a la lista de destinos,
     * los destinos se muestran en el orden correcto.
     */
    public function test_muestra_destinos_en_orden_correcto()
    {
        // Crea varios destinos en la base de datos
        $destino1 = Destino::factory()->create(['nombre' => 'A']);
        $destino2 = Destino::factory()->create(['nombre' => 'B']);
        $destino3 = Destino::factory()->create(['nombre' => 'C']);

        // Hace una petición GET a la ruta de destinos
        $response = $this->get('/destinos');

        // Verifica que los destinos estén en el orden correcto
        $response->assertViewHas('destinos', function ($destinos) use ($destino1, $destino2, $destino3) {
            return $destinos[0]->is($destino1) &&
                   $destinos[1]->is($destino2) &&
                   $destinos[2]->is($destino3);
        });
    }
}