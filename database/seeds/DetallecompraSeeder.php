<?php

use Illuminate\Database\Seeder;

class DetallecompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DetalleCompra::class, 1000)->create();
    }
}
