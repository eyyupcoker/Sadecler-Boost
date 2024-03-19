<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boosts', function (Blueprint $table) {
            $table->id();
            $table->char('currentLeague', 255);
            $table->char('leagueDivision', 255);
            $table->char('leaguePoints', 255);
            $table->char('targetLeague', 255);
            $table->char('targetLeagueDivision', 255);
            $table->char('extraWin', 255)->nullable();
            $table->char('liveStream', 255)->nullable();
            $table->char('offlineMod', 255)->nullable();
            $table->char('price', 255)->nullable();
            $table->unsignedBigInteger('user_id'); // Kullanıcıya ait ID
            $table->timestamps();
            // Kullanıcı-Boost ilişkisi için foreign key constraint ekleyelim
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boosts');
    }
};
