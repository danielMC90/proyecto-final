<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\TipoProducto;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');
$factory->define(TipoProducto::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'nombre' => $faker->unique()->randomElement(['MEMORIA RAM',       'PROCESADOR',       'MONITOR',          'IMPRESORA',        'TARJETA MADRE',
                                            'TARJETA DE VIDEO', 'DISCO DURO HDD',   'DISCO DURO SSD',   'MEMORIA FLASH',    'REGLETA']),
        'descripcion' => $fakerES->sentence(3),
        'estado' => '1',
    ];
});
