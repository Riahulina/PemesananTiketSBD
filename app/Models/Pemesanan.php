<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';
    public $incrementing = true;

    protected $fillable = [
        'id_pelanggan',
        'kereta_id',
        'jadwal',
        'metode_pembayaran',
        'status_pembayaran',
        'tanggal_pemesanan',
    ];

    // 🔗 ke pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    // 🔗 ke kereta
    public function kereta()
    {
        return $this->belongsTo(Kereta::class, 'kereta_id', 'id');
    }

    // 🔗 INI YANG WAJIB (1 pemesanan = 1 tiket)
    public function tiket()
    {
        return $this->hasOne(Tiket::class, 'id_pemesanan', 'id_pemesanan');
    }
}
