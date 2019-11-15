<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ='tbl_proveedor';
    protected $fillable = [
        'id',
        'idPersona',
        'razonSocial',
        'nit',
        'estado',
        'created_at',
        'updated_at'
    ];
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona','id');
    }
}
