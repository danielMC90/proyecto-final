<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tbl_tipo_producto';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'estado',
        'created_at',
        'updated_at'
    ];
}
