<?php

use App\DetalleCompra;
use App\Marca;
use App\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'tbl_persona',
            'tbl_proveedor',
            'tbl_compra',
            'tbl_tipo_producto',
            'tbl_marca',
            'tbl_producto',
            'tbl_detalle_compra',
        ]);
        $this->call(PersonaSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(TipoproductoSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(DetallecompraSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
