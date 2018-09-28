<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cobadeh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_reservasi');
            $table->string('nama');
            $table->string('nrp');
            $table->string('no_hp');
            $table->timestamp('jam_mulai')->useCurrent();
            $table->timestamp('jam_berakhir')->useCurrent();
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
        //
        Schema::dropIfExists('reservasi');
    }
}
