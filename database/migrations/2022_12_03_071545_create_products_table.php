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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->foreignId('id_design')->nullable();
            $table->string('nama_product');
            $table->text('deskripsi_product');
            $table->integer('harga_product');
            $table->string('foto_product1');
            $table->string('foto_product2');
            $table->string('foto_product3');
            $table->string('foto_product4');
            $table->integer('discount')->nullable();
            $table->enum('jenis_product', ['oversize', 'normalsize', 'lainnya']);
            $table->integer('stock_product');
            $table->foreign('id_design')->references('id_design')->on('designs')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('products');
    }
};
