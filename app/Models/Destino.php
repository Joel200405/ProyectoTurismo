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
    ];

    //Creando método protegido
    protected function nombre(): Attribute
    {   
        //Hacer el proceso y luego guardarlo
        return new Attribute(
            //Muestra los valores obtenidos (ACCESORES) - Convierte los caracteres en la primera letra mayuscula
            get: fn($value) => ucwords($value),

            //Captura los valores ingresados en el campo (MUTADORES) - Convierte los caracteres solo a minusculas
            set: fn($value) => strtolower($value) 
        );
    }
}