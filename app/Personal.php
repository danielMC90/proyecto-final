<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'tbl_personal';
    protected $fillable = [
        'id',
        'idPersona',
        'area',
        'puesto',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function persona(){
        // return $this->belongsTo('App\Persona','idPersona','id');
        return $this->belongsTo('App\Persona','idPersona','id');
        
        // class User extends Model { 
        //     public function car() { 
        //         // user has at maximum one car, 
        //         // so $user->car will return a single model return 
        //         $this->hasOne('Car'); } 
        // } 
        // class Car extends Model { 
        //     public function owner() { 
        //         // cars table has owner_id field that stores id of related user model 
        //         return $this->belongsTo('User'); } 
        // } 

    }

    public function area(){
        return $this->belongsTo('App\Area','idArea','id');
    }
     
}
