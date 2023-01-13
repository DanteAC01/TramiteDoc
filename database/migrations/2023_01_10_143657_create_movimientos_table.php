<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('documentos');
            $table->unsignedBigInteger('oforigen_id');
            $table->foreign('oforigen_id')->references('id')->on('oficinas');
            $table->unsignedBigInteger('ofdestino_id');
            $table->foreign('ofdestino_id')->references('id')->on('oficinas');
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
        Schema::dropIfExists('movimientos');
    }
}
