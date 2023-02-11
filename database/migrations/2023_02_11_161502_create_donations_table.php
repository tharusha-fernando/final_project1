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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('amount');
            $table->string('doner_name')->nullable();
            $table->string('doner_details')->nullable();
            $table->string('payment_method');
            $table->unsignedBigInteger('fund_id');
            $table->foreign('fund_id')->references('id')->on('funds');
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
        Schema::dropIfExists('donations');
    }
};
