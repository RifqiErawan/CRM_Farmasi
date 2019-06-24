<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama');
            $table->string('spesialisasi');
            $table->string('kontak');
            $table->string('potensi');
            $table->string('status');
            $table->string('idJadwal');
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('dokter');
    }
}
