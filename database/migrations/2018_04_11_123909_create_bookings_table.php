<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('booking_no');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('telp');
            $table->integer('id_detpaket')->unsigned();
            $table->foreign('id_detpaket')->references('id')->on('detpakets');
            $table->integer('person');
            $table->date('departure');
            $table->integer('amount')->nullable();
            $table->boolean('confirmation')->default(0);
            $table->string('payment')->nullable();
            $table->integer('stars')->nullable();
            $table->text('message')->nullable();
            $table->boolean('confirm_rating')->default(0);
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
        Schema::dropIfExists('bookings');
    }
}
