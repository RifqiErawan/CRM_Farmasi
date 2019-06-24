<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medrep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medrep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('kontak');
            $table->string('email');
            $table->string('alamat');
            $table->integer('pencapaian')->nullable();
            $table->integer('target')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medrep');
    }
}
