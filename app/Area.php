<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table ='tbl_area';
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'created_at',
        'updated_at'
    ];
}

