<?php

use App\Marca;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Marca::class, 10)->create();
        /*
        DB::table('tbl_marca')->insert([
            'nombre' => 'INTEL',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'AMD',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'SEGATE',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'SAMSUNG',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'DIGITAL',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'CORSAIR',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'GFORCE',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'DELL',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'HP',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbl_marca')->insert([
            'nombre' => 'DELUX',
            'estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
            */
    }
}
