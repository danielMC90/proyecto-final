<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Persona;
use Faker\Generator as Faker;
use Faker\Factory;

$fakerES = Factory::create('es_ES');

$factory->define(Persona::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'nombres' => $fakerES->firstName(1),
        'appaterno' => $fakerES->lastName(),
        'apmaterno' => $fakerES->lastName(),
        'ci' => $fakerES->numberBetween(3000000, 10000000),
        'genero' => $fakerES->randomElement(['MASCULINO', 'FEMENINO']),
        'direccion' => $faker->address(),
        'telefono' => $fakerES->numberBetween(60000000, 77099999),
        'correo' => $fakerES->email(),
        'estado' => '1',
    ];
});
