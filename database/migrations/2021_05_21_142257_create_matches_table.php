<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('team_id_home');
            $table->integer('team_id_away');
            $table->integer('team_id_winner');
            $table->date('match_date')->nullable();
            $table->foreign('team_id_home')->references('id')->on('teams');
            $table->foreign('team_id_away')->references('id')->on('teams');
            $table->foreign('team_id_winner')->references('id')->on('teams');
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
        Schema::dropIfExists('matches');
    }
}
