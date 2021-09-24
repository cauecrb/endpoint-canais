<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingInWatchedTimeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('watched_times', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('channel_id')->references('id')->on('channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('watched_times', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('channel_id')->references('id')->on('channel');
        });
    }
}
