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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('contract_type_id');
            $table->string('details');
            $table->decimal('fee_precentage');
            $table->decimal('fee_amount');
            $table->date('date_signed');
            $table->text('agreement')->nullable();
            $table->foreign('contract_type_id')->references('id')->on('contract_types');
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreignId('estate_id')->constrained('estates');
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
        Schema::dropIfExists('contracts');
    }
};
