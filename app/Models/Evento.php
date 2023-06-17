<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules = [
        'departamento' => 'required', // Departamento
        'nombre' => 'required',
        'start' => 'required',
        'end' => 'required'
    ];

    protected $fillable = ['departamento','nombre','start','end'];
}
