<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('kodeobat')->unique();
            $table->string('namaobat');
            $table->text('aturanpakai');
            $table->text('carakerjaobat');
            $table->text('efeksamping');
            $table->text('indikasi');
            $table->string('jenisobat');
            $table->text('komposisi');
            $table->text('kontraindikasi');
            $table->text('peringatanobat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
