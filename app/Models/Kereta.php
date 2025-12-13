<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'asal',
        'tujuan',
        'tanggal_berangkat',
        'jam_berangkat',
        'jam_tiba',
        'harga',
        'gambar',
    ];
}
