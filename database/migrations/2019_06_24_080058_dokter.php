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
            $table->string('potensi')->nullable();
            $table->string('status')->nullable();
            $table->string('idJadwal')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
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
