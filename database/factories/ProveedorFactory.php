<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Persona;
use App\Proveedor;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');
$factory->define(Proveedor::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'razonSocial' => $fakerES->company(),
        'nit' => $fakerES->numberBetween(1000000000, 9999999999),
        'estado' => '1',
        'idPersona' => Persona::all('id')->random()
    ];
});
