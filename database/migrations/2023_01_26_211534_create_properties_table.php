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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('city');
            $table->string('postal_code')->nullable();
            $table->decimal('space');
            $table->float('price');
            $table->integer('balconies')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('parking_spaces')->nullable();
            $table->boolean('pets_allowed');
            $table->boolean('available');
            $table->foreignId('type_id')->constrained('property_types')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('transaction_type_id')->constrained('transaction_types')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('properties');
    }
};
