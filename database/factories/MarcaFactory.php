<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marca;
use App\Model;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');
$factory->define(Marca::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'nombre' => $faker->unique()->randomElement(['INTEL',       'AMD',      'SAMSUNG',          'DELL',        'DELUX',
                                                    'FORZA',        'HP',       'CORSAIR',          'GFORDE',       'SEGATE']),
        'estado' => '1',
    ];
});
