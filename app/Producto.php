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
        //dd(TipoProducto::where('tbl_tipo_producto.nombre', 'like', '%' . $tipoProducto . '%')->select('tbl_tipo_producto.id')->get()->toArray());
        if (trim($tipoProducto) != ""){
            $query->whereIn('tbl_producto.idTipoProducto',
                TipoProducto::where('tbl_tipo_producto.nombre', 'like', '%' . $tipoProducto . '%')->select('tbl_tipo_producto.id')->get()->toArray()
            );
            //dd($query->get()->toArray());
            //dd($query->toSql() . ' valor: ' . $tipoProducto);
        }
    }

    public function scopeNombremarca($query, $marca){
        if (trim($marca) != ""){
            $query->whereIn('idMarca',
                Marca::where('nombre', 'like', '%'. $marca . '%')->select('id')->get()->toArray()
            );
        }
    }

    public function scopeDescripcion($query, $descripcion){
        if (trim($descripcion) != ""){
            $query->where('descripcion', 'like', '%' . $descripcion + '%');
        }
    }
}
