<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchedTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watched_times', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('channel_id');
            //$table->foreign('user_id')->references('id')->on('user');
            //$table->foreign('channel_id')->references('id')->on('channel');
            $table->float('minutes');
            $table->dateTime('date');
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
        Schema::dropIfExists('watched_times');
    }
}
