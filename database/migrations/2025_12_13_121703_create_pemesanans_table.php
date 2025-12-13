<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pemesanans', function (Blueprint $table) {
        $table->id('id_pemesanan');

        $table->unsignedBigInteger('id_pelanggan');
        $table->unsignedBigInteger('kereta_id');

        $table->dateTime('tanggal_pemesanan');
        $table->string('jadwal');
        $table->string('metode_pembayaran');
        $table->string('status_pembayaran')->default('pending');

        $table->timestamps();

        // FOREIGN KEY MANUAL (INI PENTING)
        $table->foreign('id_pelanggan')
              ->references('id_pelanggan')
              ->on('pelanggans')
              ->onDelete('cascade');

        $table->foreign('kereta_id')
              ->references('id')
              ->on('keretas')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
