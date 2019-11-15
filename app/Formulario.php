<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'tbl_formulario';
    protected $fillable = [
        'id',
        'idPersona',
        'fechaEmision',
        'razonSocial',
        'nit',
        'idProducto',
        'cantidad',
        'subtotal',
        'estado',
        'created_at',
        'updated_at'
    ];
    
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona','id');
    }
    public function tipoProducto(){
        return $this->belongsTo('App\Producto','idProducto','id');
    }
}