<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_compra', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idProveedor')->unsigned();
            $table->date('fecha');
            $table->string('detalles', 200);
            $table->decimal('total', 10, 0);
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

           $table->foreign('idProveedor')->references('id')->on('tbl_proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_compra');
    }
}
