<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_producto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idTipoProducto')->unsigned();
            $table->bigInteger('idMarca')->unsigned();
            $table->string('descripcion', 100);
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

            $table->unique(['idTipoProducto', 'idMarca', 'descripcion']);
            $table->foreign('idTipoProducto')->references('id')->on('tbl_tipo_producto');
            $table->foreign('idMarca')->references('id')->on('tbl_marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_producto');
    }
}
