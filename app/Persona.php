<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'tbl_persona';
    protected $fillable = [
        'id',
        'nombres',
        'apPaterno',
        'apMaterno',
        'ci',
        'genero',
        'direccion',
        'telefono',
        'correo',
        'estado',
        'created_at',
        'updated_at'
    ];
}
