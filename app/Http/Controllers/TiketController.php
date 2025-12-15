<?php

namespace App\Http\Controllers;

use App\Models\Tiket;

class TiketController extends Controller
{
    public function struk(string $kode)
    {
        $tiket = Tiket::with([
            'pelanggan',
            'kereta',
        ])->where('kode_tiket', $kode)->firstOrFail();

        return view('tiket.struk', compact('tiket'));
    }
}
