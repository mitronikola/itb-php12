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
        //
        Schema::table('film_director', function (Blueprint $table) {
            $table->primary(['film_id', 'person_id'], 'film_director_pk');

            $table->foreign('film_id', 'film_director_film_fk')->references('id')->on('films')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('film_director', function (Blueprint $table) {
            $table->dropForeign('film_director_film_fk');
            $table->dropPrimary('film_director_pk');
        });
    }
};
