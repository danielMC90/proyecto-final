<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compra;
use App\Model;
use App\Proveedor;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');

$factory->define(Compra::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'idproveedor' => Proveedor::all('id')->random(),
        'fecha' => $fakerES->dateTimeBetween('2019-01-01', '2019-11-13'),
        'detalles' => $fakerES->text(100),
        'total' => $faker->numberBetween(100,1000),
        'estado'=> '1',
    ];
});
