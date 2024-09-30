<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destino>
 */
class DestinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['Laguna de Paca', 'Laguna de Ñahuimpuquio']),
            'descripcion' => $this->faker->paragraph(),
            'ubicacion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2,100,200)
        ];
    }
}
