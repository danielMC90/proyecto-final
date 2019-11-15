<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    protected $table = 'tbl_privilegio';
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'created_at',
        'updated_at'
    ];
}
