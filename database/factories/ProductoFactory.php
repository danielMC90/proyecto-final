<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marca;
use App\Model;
use App\Producto;
use App\TipoProducto;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');
$factory->define(Producto::class, function (Faker $faker) use ($fakerES){
    return [
        //
        'idTipoProducto' => TipoProducto::all('id')->random(),
        'idMarca' => Marca::all('id')->random(),
        'descripcion' => $faker->unique()->text(80),
        'estado' => '1',
    ];
});
