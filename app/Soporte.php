<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    protected $table = 'tbl_soporte';
    protected $fillable = [
        'id',
        'idPersonal',
        'idTipoSoporte',
        'fecha',
        'asunto',
        'procesos',
        'resolucion',
        'recomendacion',
        'estado',
        'created_at',
        'updated_at'

    ];


    public function personal(){
        return $this->belongsTo('App\Personal', 'idPersonal','id');
    }

    public function tipoSoporte(){
        return $this->belongsTo('App\TipoSoporte','idTipoSoporte','id');
    }

}
