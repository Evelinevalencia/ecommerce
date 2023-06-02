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
        Schema::create('lines', function (Blueprint $table) {
            $table->id('id_line');
            $table->bigInteger('id_transaksi');
            $table->bigInteger('id_product');
            $table->string('warna');
            $table->string('ukuran');
            $table->integer('qty');
            $table->integer('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lines');
    }
};
