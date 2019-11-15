<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table ='tbl_detalle_compra';
    protected $fillable = [
        'id',
        'idCompra',
        'idProducto',
        'cantidad',
        'precioUnitario',
        'subtotal',
        'estado',
        'created_at',
        'updated_at'
    ];
    public function compra(){
        return $this->belongsTo('App\Compra','idCompra','id');
    }
    public function producto(){
        return $this->belongsTo('App\Producto','idProducto','id');
    }
    
}
