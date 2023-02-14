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
        Schema::create('buy_a_s', function (Blueprint $table) {
            $table->id();
            //$table->date('date')->nullable();
            //$table->bigInteger('amount');
            //$table->string('doner_name')->nullable();
            //$table->string('doner_details')->nullable();
            //$table->string('payment_method');

            $table->date('date')->nullable();
            $table->bigInteger('amount');
            $table->string('doner_name')->nullable();
            $table->string('doner_details')->nullable();
            $table->string('payment_method');
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
        Schema::dropIfExists('buy_a_s');
    }
};
