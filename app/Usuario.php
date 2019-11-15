<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'tbl_usuario';
    protected $fillable=[
        'id',
        'idPersona',
        'contrasenha',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function persona(){
        return $this->hasOne('App\Persona','id','idPersona');
    }
}
