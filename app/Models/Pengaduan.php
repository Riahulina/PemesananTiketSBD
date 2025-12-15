<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'user_id',
        'judul',
        'status',
    ];

    // pengaduan punya banyak pesan (chat)
    public function messages()
    {
        return $this->hasMany(PengaduanMessage::class);
    }

    // pengaduan milik satu pelanggan
    public function user()
    {
        return $this->belongsTo(Pelanggan::class, 'user_id', 'id_user');
    }
}
