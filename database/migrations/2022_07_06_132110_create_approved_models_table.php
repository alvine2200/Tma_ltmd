<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_models', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('fullname');
            $table->string('weight');
            $table->string('height');
            $table->string('hips');
            $table->string('burst_chest');
            $table->string('shoe_size');
            $table->string('hair_color');
            $table->string('complexions');
            $table->string('category');
            $table->string('instagram');
            $table->string('tiktok');
            $table->string('experience');            
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
        Schema::dropIfExists('approved_models');
    }
};
