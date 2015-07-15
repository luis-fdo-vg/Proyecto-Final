<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateproducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cateproduc', function (Blueprint $table) {

        $table->integer('id_producto')->unsigned();
        $table->foreign('id_producto')->references('id')->on('productos');

        $table->integer('id_categoria')->unsigned();
        $table->foreign('id_categoria')->references('id')->on('categorias');
        $table->timestamps();

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cateproduc');
        //
    }
}
