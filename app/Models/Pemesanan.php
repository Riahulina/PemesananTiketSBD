<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
        'id_pelanggan',
        'kereta_id',
        'tanggal_pemesanan',
        'jadwal',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function kereta()
    {
        return $this->belongsTo(Kereta::class);
    }
}
