<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id('id_tiket');

            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('kereta_id');

            $table->string('kode_tiket')->unique();
            $table->string('kursi')->nullable();

            $table->date('tanggal_berangkat');
            $table->string('jadwal');

            $table->string('status_tiket')->default('aktif');

            $table->timestamps();

            // FK
            $table->foreign('id_pemesanan')
                  ->references('id_pemesanan')->on('pemesanans')
                  ->cascadeOnDelete();

            $table->foreign('id_pelanggan')
                  ->references('id_pelanggan')->on('pelanggans')
                  ->cascadeOnDelete();

            $table->foreign('kereta_id')
                  ->references('id')->on('keretas')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
