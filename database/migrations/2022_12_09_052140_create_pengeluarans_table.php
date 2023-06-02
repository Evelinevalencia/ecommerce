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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->foreignId('id_user')->nullable();
            $table->string('judul_pengeluaran');
            $table->string('deskripsi_pengeluaran');
            $table->decimal('total_pengeluaran', 10,2);
            $table->date('tanggal_pengeluaran');
            $table->foreign('id_user')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('pengeluarans');
    }
};
