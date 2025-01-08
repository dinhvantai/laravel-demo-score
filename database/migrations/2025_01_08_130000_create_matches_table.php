<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->uuid('id');

            $table->foreignUuid('competition_id');
            $table->foreign('competition_id')
                ->references('id')->on('competitions');

            $table->foreignUuid('home_team_id');
            $table->foreign('home_team_id')
                ->references('id')->on('teams');

            $table->foreignUuid('away_team_id');
            $table->foreign('away_team_id')
                ->references('id')->on('teams');

            $table->tinyInteger('status_id');
            $table->unsignedInteger('match_time');

            $table->json('home_scores');
            $table->json('away_scores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
