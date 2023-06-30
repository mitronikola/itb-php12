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
        Schema::table('film_director', function (Blueprint $table){
            $table->foreign('person_id', 'film_director_director_fk')->references('id')->on('people')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('film_director', function (Blueprint $table){
            $table->dropForeign('film_director_director_fk');
        });
    }
};
