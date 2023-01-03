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

        Schema::create('amenity_estate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amenity_id');
            $table->unsignedBigInteger('estate_id');
            $table->foreign('amenity_id')->references('id')->on('amenities');
            $table->foreign('estate_id')->references('id')->on('estates');
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
        Schema::dropIfExists('estate_amenity');
    }
};
