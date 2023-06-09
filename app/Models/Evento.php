<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules = [
        'nombre' => 'required', // Nombre
        'departamento' => 'required',
        'telefono' => 'required',
        'fecha' => 'required'
    ];

    protected $fillable = ['nombre', 'departamento', 'telefono', 'fecha'];
}
