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
    /** 
     * public function definition(): array
     * {
      *  return [
      *      'nombre' => $this->faker->randomElement(['Laguna de Paca', 'Laguna de Ñahuimpuquio']),
      *      'descripcion' => $this->faker->paragraph(),
      *      'ubicacion' => $this->faker->sentence(),
      *      'precio' => $this->faker->randomFloat(2,100,200),
      *      'imagen_url' => $this->faker->randomElement(['img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'])
      *  ];
    * }
     */
    protected static $index = 0; // Índice para las imágenes
    protected static $imagenes = ['img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'];

    public function definition(): array
    {
        // Asigna la imagen según el índice y reinicia si supera el tamaño del arreglo
        $imagen_url = self::$imagenes[self::$index];
        self::$index = (self::$index + 1) % count(self::$imagenes); // Incrementa y reinicia si es necesario

        return [
            'nombre' => $this->faker->randomElement(['Laguna de Paca', 'Laguna de Ñahuimpuquio']),
            'descripcion' => $this->faker->paragraph(),
            'ubicacion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 100, 200),
            'imagen_url' => $imagen_url,
        ];
    }
}
