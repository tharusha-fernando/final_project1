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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->bigInteger('nic');
            $table->integer('contact');
            $table->string('email');
            $table->longText('description');
            $table->bigInteger('amount');
            $table->string('file_path')->nullable();
            $table->unsignedBigInteger('patient_user')->nullable();
            $table->foreign('patient_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('funds');
    }
};
