<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'tbl_actividad';
    protected $fillable = [
        'id',
        'idPersonal',
        'asunto',
        'detalles',
        'fecha',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function personal(){
        return $this->belongsTo('App\Personal','idPersonal','id');
    }
}
