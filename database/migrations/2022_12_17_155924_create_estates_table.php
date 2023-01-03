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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('postale_code')->nullable();
            $table->decimal('space');
            $table->float('price');
            $table->integer('balconies')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('parking_spaces')->nullable();
            $table->boolean('pets_allowed');
            $table->boolean('available');
            $table->boolean('assigned')->nullable();
            $table->date('assignment_date')->nullable();
            $table->foreignId('type_id')->constrained('estate_types');
            $table->foreignId('city_id')->constrained();
            $table->foreign('agent_id')->references('id')->on('users');
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
        Schema::dropIfExists('estates');
    }
};
