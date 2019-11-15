<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_proveedor', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->bigInteger('idPersona')->unsigned();
            $table->string('razonSocial', 50);
            $table->string('nit', 20)->unique();
            $table->tinyInteger('estado')->default('1');
            $table->timestamps();

            $table->foreign('idPersona')->references('id')->on('tbl_persona');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_proveedor');
    }
}
