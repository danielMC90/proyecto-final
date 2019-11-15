<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table ='tbl_compra';
    protected $fillable = [
        'id',
        'idProveedor',
        'fecha',
        'detalles',
        'total',
        'estado',
        'created_at',
        'updated_at'
    ];
    public function proveedor(){
        return $this->belongsTo('App\Proveedor','idProveedor','id');
    }
}
