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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->foreignId('id_user');
            $table->foreignId('id_alamat');
            $table->string('shipping');
            $table->enum('status', ['belum dibayar', 'dalam proses', 'selesai'])->default('belum dibayar');
            $table->decimal('total', 10, 2);
            $table->date('tanggal_transaksi');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_alamat')->references('id_alamat')->on('alamats');
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
        Schema::dropIfExists('transaksis');
    }
};
