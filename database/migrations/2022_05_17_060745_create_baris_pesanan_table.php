<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarisPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baris_pesanan', function (Blueprint $table) {
            $table->foreignId('pesanan_id')->constrained('pesanan');
            $table->foreignId('barang_varian_id')->constrained('barang_varian');
            $table->integer('kualitas')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baris_pesanan');
    }
}
