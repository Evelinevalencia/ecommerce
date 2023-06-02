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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id('id_alamat');
            $table->foreignId('id_user')->nullable();
            $table->enum('label', ['rumah', 'kantor', 'lainnya']);
            $table->text('alamat');
            $table->char('kodepos', 5);
            $table->char('notelp', 15);
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('alamats');
    }
};
