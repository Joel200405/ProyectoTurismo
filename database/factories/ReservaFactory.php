<?php

namespace Database\Factories;

use App\Models\Destino;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'destino_id' => Destino::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'fecha' => $this->faker->date(),
            'personas' => $this->faker->numberBetween(1, 10),
            'comentarios' => $this->faker->paragraph(),
            'estado' => $this->faker->randomElement(['pendiente', 'confirmado', 'cancelado'])
        ];
    }
}