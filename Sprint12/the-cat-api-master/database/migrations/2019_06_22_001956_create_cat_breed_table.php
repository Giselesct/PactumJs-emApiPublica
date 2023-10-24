<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatBreedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_breed', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('temperament')->nullable();
            $table->string('life_span')->nullable();
            $table->text('alt_names')->nullable();
            $table->string('cfa_url')->nullable();
            $table->string('wikipedia_url')->nullable();
            $table->string('origin')->nullable();
            $table->json('weight')->nullable();
            $table->boolean('experimental')->nullable();
            $table->boolean('hairless')->nullable();
            $table->boolean('natural')->nullable();
            $table->boolean('rare')->nullable();
            $table->boolean('rex')->nullable();
            $table->boolean('suppressed_tail')->nullable();
            $table->boolean('short_legs')->nullable();
            $table->boolean('hypoallergenic')->nullable();
            $table->enum('adaptability', [1, 2, 3, 4, 5])->nullable();
            $table->enum('affection_level', [1, 2, 3, 4, 5])->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_codes')->nullable();
            $table->enum('child_friendly', [1, 2, 3, 4, 5])->nullable();
            $table->enum('dog_friendly', [1, 2, 3, 4, 5])->nullable();
            $table->enum('energy_level', [1, 2, 3, 4, 5])->nullable();
            $table->enum('grooming', [1, 2, 3, 4, 5])->nullable();
            $table->enum('health_issues', [1, 2, 3, 4, 5])->nullable();
            $table->enum('intelligence', [1, 2, 3, 4, 5])->nullable();
            $table->enum('shedding_level', [1, 2, 3, 4, 5])->nullable();
            $table->enum('social_needs', [1, 2, 3, 4, 5])->nullable();
            $table->enum('stranger_friendly', [1, 2, 3, 4, 5])->nullable();
            $table->enum('vocalisation', [1, 2, 3, 4, 5])->nullable();
            $table->string('vcahospitals_url')->nullable();
            $table->string('vetstreet_url')->nullable();
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
        Schema::dropIfExists('cat_breed');
    }
}
