<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAditionalCatBreedsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_breed', function (Blueprint $table) {
            $table->boolean('indoor')->after("life_span");
            $table->boolean('extinct')->after("rare")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_breed', function (Blueprint $table) {
            //
        });
    }
}
