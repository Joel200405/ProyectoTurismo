<?php

namespace Database\Seeders;
use App\Models\Destino;
use Illuminate\Support\Facades\DB;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('destinos')->insert([
            [
                'nombre' => 'Restos Arqueológicos de Colcas',
                'descripcion' => 'Sitio arqueológico a 3.5 km de Carhuacayán. Se accede por un camino señalizado que lleva a antiguas estructuras de gran valor histórico.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 350.00,
                'imagen_url' => 'Destino1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Restos Arqueológicos de Marcamarcán',
                'descripcion' => 'Ubicado a 2.5 km cuesta arriba de Carhuacayán, este sitio preinca destaca por sus vestigios estratégicos en los acantilados.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 450.00,
                'imagen_url' => 'Destino2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Baños Termomedicinales de Collpa',
                'descripcion' => 'Aguas termales con propiedades curativas, ubicadas cerca de Carhuacayán, que ofrecen relajación y contacto con la naturaleza.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 300.00,
                'imagen_url' => 'Destino3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lagunas de Hueghue y Taprash',
                'descripcion' => 'Estas dos lagunas situadas en los altos Andes ofrecen paisajes espectaculares, ideales para el senderismo y la exploración.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 200.00,
                'imagen_url' => 'Destino4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laguna de Llactamachay',
                'descripcion' => 'Laguna ubicada en las montañas que destaca por su belleza natural, rodeada de mitos locales y fauna variada.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 250.00,
                'imagen_url' => 'Destino5.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laguna de Tuctococha',
                'descripcion' => 'Ubicada a gran altitud, esta laguna es conocida por sus aguas cristalinas, variedad de la fauna silvestre y la tranquilidad de su entorno.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 270.00,
                'imagen_url' => 'Destino6.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'La Bella Durmiente de Carhuacayán',
                'descripcion' => 'Cerro que asemeja a una mujer dormida, visible desde varios puntos del pueblo, con numerosas leyendas.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 300.00,
                'imagen_url' => 'Destino7.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Laguna de Puricocha y Lucmacocha',
                'descripcion' => 'Dos lagunas situadas en el cerro San Antonio, rodeadas de paisajes espectaculares, ideales para el ecoturismo.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 250.00,
                'imagen_url' => 'Destino8.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cordillera de Puajanca',
                'descripcion' => 'Cadena montañosa de gran atractivo para los amantes del montañismo, con imponentes vistas y naturaleza única.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 400.00,
                'imagen_url' => 'Destino9.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'El León y el Ratón de Quillaway',
                'descripcion' => 'Formaciones rocosas que evocan la figura de un león y un ratón, parte de la rica geografía local llena de curiosidades naturales.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 180.00,
                'imagen_url' => 'Destino10.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'La Tortuga de Quillaway',
                'descripcion' => 'Una formación rocosa en forma de tortuga que es parte de las maravillas geológicas de la región de Carhuacayán.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 190.00,
                'imagen_url' => 'Destino11.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'El Soldado de Bolívar',
                'descripcion' => 'Figura rocosa que según la tradición local representa a un soldado de Bolívar, envuelta en historias de la independencia.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 220.00,
                'imagen_url' => 'Destino12.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cerro de Santa Clara',
                'descripcion' => 'Cerro conocido por ser un lugar de peregrinación local que se asemeja a la de una imagen de una virgen, con impresionantes vistas de los alrededores.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 280.00,
                'imagen_url' => 'Destino13.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'El Cocodrilo de Carhuacayán',
                'descripcion' => 'Formación rocosa que asemeja a un cocodrilo, parte del atractivo natural que rodea al pueblo de Carhuacayán.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 200.00,
                'imagen_url' => 'Destino14.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'La Catarata del Sapo',
                'descripcion' => 'Hermosa catarata que debe su nombre a una roca en forma de sapo, rodeada de vegetación y senderos ideales para caminatas.',
                'ubicacion' => 'Santa Bárbara de Carhuacayán, Yauli',
                'precio' => 300.00,
                'imagen_url' => 'Destino15.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
                
    }
}