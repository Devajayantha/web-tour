<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetpaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detpakets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_paket')->unsigned();
            $table->foreign('id_paket')->references('id')->on('pakets');
            $table->integer('id_subpaket')->unsigned();
            $table->foreign('id_subpaket')->references('id')->on('subpakets');
            $table->integer('price');
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
        Schema::dropIfExists('detpakets');
    }
}
