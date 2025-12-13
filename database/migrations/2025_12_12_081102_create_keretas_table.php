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
    Schema::create('keretas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('kelas');
        $table->string('asal');
        $table->string('tujuan');
        $table->date('tanggal_berangkat'); // ✅ tambah di sini
        $table->time('jam_berangkat');
        $table->time('jam_tiba');
        $table->integer('harga');
        $table->string('gambar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keretas');
    }
};
