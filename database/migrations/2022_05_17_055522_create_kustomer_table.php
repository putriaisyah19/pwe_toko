<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kustomer', function (Blueprint $table) {
            $table->id();
            $table->string('NamaDepan', 50);
            $table->string('NamaBelakang', 50);
            $table->string('email', 50);
            $table->string('alamat', 255);
            $table->string('NoHP', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kustomer');
    }
}
