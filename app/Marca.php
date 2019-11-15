<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'tbl_marca';
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'created_at',
        'updated_at'
    ];
}
