<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario normal
        //php artisan db:seed --class=UserSeeder
        User::create([
            'nombre' => 'Usuario Normal',
            'username' => 'steven',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        //Crear administrados
        User::create([
            'nombre' => 'admin',
            'username' => 'luis',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);
    }
}