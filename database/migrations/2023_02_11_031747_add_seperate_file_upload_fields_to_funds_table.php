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
        Schema::table('funds', function (Blueprint $table) {
            $table->string('medical_proof');
            $table->string('nic_');
            $table->string('living_proof');
            $table->string('photos_of');
            $table->string('file_path')->change()->nullable(true);     //file_path
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funds', function (Blueprint $table) {
            $table->dropColumn('medical_proof');
            $table->dropColumn('nic_');
            $table->dropColumn('living_proof');
            $table->dropColumn('photos_of');//file_path
            $table->string('file_path')->change()->nullable(false);
            //
        });
    }
};
