<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Kereta;


class PemesananController extends Controller
{
    public function store(Request $request)

{
    $request->validate([
        'email' => 'required|email',
        'nama_pelanggan' => 'required',
        'nohp_pelanggan' => 'required',
        'alamat' => 'required',
        'kereta_id' => 'required|exists:keretas,id',
        'metode_pembayaran' => 'required',
    ]);

    try {
        $kereta = Kereta::findOrFail($request->kereta_id);
        // 1️⃣ SIMPAN PELANGGAN
        $pelanggan = Pelanggan::firstOrCreate(
            ['email' => $request->email], // cek unik
            [
                'nama_pelanggan' => $request->nama_pelanggan,
                'nohp_pelanggan' => $request->nohp_pelanggan,
                'alamat' => $request->alamat,
            ]
        );
        

        // 2️⃣ SIMPAN PEMESANAN
        $pemesanan = Pemesanan::create([
            'id_pelanggan' => $pelanggan->id_pelanggan,
            'kereta_id' => $request->kereta_id,
            'jadwal' => $kereta->tanggal_berangkat . ' ' . $kereta->jam_berangkat,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => 'berhasil',
            'tanggal_pemesanan' => now(),
        ]);
        
       // 3️⃣ SIMPAN TIKET
       $tiket = Tiket::create([
        'kode_tiket'         => 'TKT-' . strtoupper(Str::random(8)),
        'id_pemesanan'       => $pemesanan->id_pemesanan,
        'id_pelanggan'       => $pelanggan->id_pelanggan,
        'kereta_id'          => $request->kereta_id,
        'tanggal_berangkat'  => $kereta->tanggal_berangkat, // ⬅️ INI KUNCI
        'jadwal'             => $kereta->jam_berangkat,     // optional tapi bagus
        'status_tiket'       => 'aktif',
    ]);
    

        DB::commit();

        return redirect()->route('tiket.struk', $tiket->kode_tiket);

    } catch (\Throwable $e) {
        DB::rollBack();
        dd($e->getMessage());
    }
}
}