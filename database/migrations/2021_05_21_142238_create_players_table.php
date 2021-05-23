<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id');
            $table->string('first_name', 125);
            $table->string('last_name', 125);
            $table->string('image_url', 125)->nullable();
            $table->integer('jersey_number')->default(0);
            $table->string('country')->nullable();
            $table->integer('total_match_played')->default(0);
            $table->integer('total_runs')->default(0);
            $table->integer('highest_score')->default(0);
            $table->foreign('team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('players');
    }
}
