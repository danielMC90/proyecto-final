<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'tbl_rol';
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'created_at',
        'updated_at'
    ];
}
