<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tbl_producto';
    protected $fillable = [
        'id',
        'idTipoProducto',
        'descripcion',
        'idMarca',

        'estado',
        'created_at',
        'updated_at'
    ];

    public function tipoProducto(){
        return $this->belongsTo('App\TipoProducto','idTipoProducto','id');
    }
    public function marca(){
        return $this->belongsTo('App\Marca','idMarca','id');
    }

    public function scopeNombretipoproducto($query, $tipoProducto){
        if (trim($tipoProducto) != "")
            $query->whereIn('idTipoProducto', TipoProducto::where('nombre', 'like', '%' . $tipoProducto . '%'));
    }

    public function scopeNombremarca($query, $marca){
        if (trim($marca) != "")
            $query->whereIn('idMarca', Marca::where('nombre', 'like', '%'. $marca . '%'));
    }

    public function scopeDescripcion($query, $descripcion){
        if (trim($descripcion) != "")
            $query->where('descripcion', 'like', '%' . $descripcion + '%');
    }
}
