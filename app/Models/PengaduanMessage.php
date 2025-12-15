<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengaduanMessage extends Model
{
    protected $fillable = [
        'pengaduan_id',
        'sender_type',
        'message',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
