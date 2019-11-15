<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalle_compra', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idCompra')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->decimal('subtotal', 10, 0)->unsigned();
            $table->decimal('precioUnitario', 10, 0)->unsigned();
            $table->tinyInteger('estado')->unsigned()->default(1);
            $table->timestamps();

            $table->foreign('idCompra')->references('id')->on('tbl_compra');
            $table->foreign('idProducto')->references('id')->on('tbl_producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detalle_compra');
    }
}
