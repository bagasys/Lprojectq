<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjams', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('nrp_peminjam');
            $table->string('nama_peminjam');
            $table->string('alamat_peminjam');
            $table->string('email_peminjam');
            $table->string('nomor_hp_peminjam');
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
        Schema::dropIfExists('peminjams');
    }
}
