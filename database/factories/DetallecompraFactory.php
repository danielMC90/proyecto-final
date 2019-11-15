<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compra;
use App\DetalleCompra;
use App\Model;
use App\Producto;
use Faker\Generator as Faker;

use Faker\Factory;
$fakerES = Factory::create('es_ES');
$factory->define(DetalleCompra::class, function (Faker $faker) use ($fakerES){
    $cantidad = $faker->numberBetween(1, 100);
    $subtotal = $faker->numberBetween(100, 9999);
    return [
        //
        'idcompra' => $faker->randomElement(Compra::all('id')),
        'idproducto' => $faker->randomElement(Producto::all('id')),
        'cantidad' => $cantidad,
        'subtotal' => $subtotal,
        'preciounitario' => $subtotal / $cantidad,
        'estado' => '1',
    ];
});
