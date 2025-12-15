<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table = 'tikets';
    protected $primaryKey = 'id_tiket';
    public $incrementing = true;

    protected $fillable = [
        'id_pemesanan',
        'id_pelanggan',
        'kereta_id',
        'kode_tiket',
        'kursi',
        'tanggal_berangkat',
        'jadwal',
        'status_tiket',
    ];

    // RELATIONS
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function kereta()
    {
        return $this->belongsTo(Kereta::class, 'kereta_id');
    }
}

