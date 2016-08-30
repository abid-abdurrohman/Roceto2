<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->integer('home_participant_id')->unsigned()->index();
            $table->foreign('home_participant_id')->references('id')->on('participants')->onDelete('cascade');
            $table->integer('away_participant_id')->unsigned()->index();
            $table->foreign('away_participant_id')->references('id')->on('participants')->onDelete('cascade');
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
        Schema::drop('matches');
    }
}
