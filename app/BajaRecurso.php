<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BajaRecurso extends Model
{
    protected $table= 'tbl_baja_recurso';
    protected $fillable = [
        'id',
        'idRecurso',
        'asunto',
        'detalles',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function Recurso(){
        return $this->belongsTo('App\Recurso','idRecurso','id');
    }
}
