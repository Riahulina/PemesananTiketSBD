<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'id_pelanggan';
    public $incrementing = true;

    protected $fillable = [
        'nama_pelanggan',
        'email',
        'nohp_pelanggan',
        'alamat',
    ];
}
