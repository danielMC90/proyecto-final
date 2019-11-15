<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_persona', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombres', 30);
            $table->string('apPaterno', 30);
            $table->string('apMaterno', 30);
            $table->string('ci', 12)->unique();
            $table->string('genero', 10);
            $table->string('direccion', 250);
            $table->string('telefono', 15);
            $table->string('correo', 40);
            $table->tinyInteger('estado')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_persona');
    }
}
