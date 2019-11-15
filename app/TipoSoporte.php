<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSoporte extends Model
{
    protected $table = 'tbl_tipo_soporte';
    protected $fillable=[
        'id',
        'nombre',
        'estado',
        'created_at',
        'updated_at'
    ];
}
