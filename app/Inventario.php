<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $table = 'tbl_inventario';
    protected $fillable= [
        'id',
        'idProducto',
        
        'serie',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function producto(){
        return $this->belongsTo('App\Producto','idProducto','id');
    }

    
}
