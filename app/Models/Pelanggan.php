<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'email',
        'nama_pelanggan',
        'nohp_pelanggan',
        'alamat',
    ];
}
