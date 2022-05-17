<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangVarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_varian', function (Blueprint $table) {
            $table->id();
            $table->string('warna', 3);
            $table->string('ukuran', 50);
            $table->string('detail', 255);
            $table->integer('kualitas')->default(0);
            $table->foreignId('barang_id')->constrained('barang');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_varian');
    }
}
