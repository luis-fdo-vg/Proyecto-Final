<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasRealizadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventasrealizadas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->string('name',100);
            $table->string('nombre_producto',100);
            $table->integer('cantidad');
            $table->integer('precio');
            
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
        Schema::drop('ventasrealizadas');
        //
    }
}