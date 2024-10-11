<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'precio',
        'imagen_url',
        'popular',
    ];

    //Creando método protegido
    protected function nombre(): Attribute
    {   
        //Hacer el proceso y luego guardarlo
        return new Attribute(
            // Convierte el nombre a mayúsculas al recuperarlo
            get: fn($value) => ucwords(strtolower($value)), // Primero a minúsculas, luego a capitalizar
            // Almacena el nombre en minúsculas
            set: fn($value) => strtolower($value) 
        );
    }
}