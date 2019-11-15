<?php

use App\TipoProducto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(TipoProducto::class, 10)->create();
        /*DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'MEMORIA RAM',
            'descripcion' => 'MEMORIA RAM',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'PROCESADOR',
            'descripcion' => 'PROCESADOR',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'DISCO',
            'descripcion' => 'DISCO',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'MEMORIA USB',
            'descripcion' => 'MEMORIA USB',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'TECLADO',
            'descripcion' => 'TECLADO',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'MOUSE',
            'descripcion' => 'MOUSE',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'ALTAVOZ PC',
            'descripcion' => 'ALTAVOZ PC',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'AUDIFONO PC',
            'descripcion' => 'AUDIFONO PC',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'FUENTE',
            'descripcion' => 'FUENTE',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'REGLETA',
            'descripcion' => 'REGLETA',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_tipo_producto')->insert([
            'nombre' => 'TARJETA DE VIDEO',
            'descripcion' => 'TARJETA DE VIDEO',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);*/
    }
}
