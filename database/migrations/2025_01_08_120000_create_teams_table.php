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
        Schema::create('teams', function (Blueprint $table) {
            $table->uuid('id')->index();

            $table->foreignUuid('competition_id');
            $table->foreign('competition_id')
                ->references('id')->on('competitions');

            $table->foreignUuid('country_id');
            $table->foreign('country_id')
                ->references('id')->on('countries');

            $table->string('name');
            $table->string('logo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
