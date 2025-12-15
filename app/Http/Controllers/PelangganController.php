<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Kereta;
use App\Models\Pemesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Form beli tiket
     */
    public function create(Kereta $kereta)
    {
        return view('pelanggan.create', compact('kereta'));
    }

    /**
     * Simpan pelanggan + pemesanan + tiket
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_pelanggan' => 'required|string|max:100',
            'nohp_pelanggan' => 'required|string|max:20',
            'alamat' => 'required|string',
            'id' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        DB::transaction(function () use ($request) {

            // 1️⃣ SIMPAN / AMBIL PELANGGAN
            $pelanggan = Pelanggan::firstOrCreate(
                ['email' => $request->email],
                [
                    'nama_pelanggan' => $request->nama_pelanggan,
                    'nohp_pelanggan' => $request->nohp_pelanggan,
                    'alamat' => $request->alamat,
                ]
            );

            // 2️⃣ AMBIL DATA KERETA
            $kereta = Kereta::findOrFail($request->kereta_id);

            // 3️⃣ SIMPAN PEMESANAN
            $pemesanan = Pemesanan::create([
                'id_pelanggan' => $pelanggan->id_pelanggan,
                'id' => $kereta->id,
                'tanggal_pemesanan' => now(),
                'jadwal' => Carbon::parse($kereta->tanggal_berangkat)->format('d M Y')
                            . ' | ' . $kereta->jam_berangkat
                            . ' - ' . $kereta->jam_tiba,
                'metode_pembayaran' => $request->metode_pembayaran,
                'status_pembayaran' => 'pending',
            ]);

            // 4️⃣ GENERATE TIKET (SNAPSHOT)
            Tiket::create([
                'id_pemesanan' => $pemesanan->id_pemesanan,
                'id_pelanggan' => $pelanggan->id_pelanggan,
                'id' => $kereta->id,
                'kode_tiket' => 'TKT-' . strtoupper(Str::random(8)),
                'tanggal_berangkat' => $kereta->tanggal_berangkat,
                'jadwal' => Carbon::parse($kereta->tanggal_berangkat)->format('d M Y')
                            . ' | ' . $kereta->jam_berangkat
                            . ' - ' . $kereta->jam_tiba,
                'status_tiket' => 'aktif',
            ]);

        });

        return redirect()->route('pelanggan.sukses');
    }

    /**
     * HALAMAN SUKSES
     */
    public function sukses()
    {
        return view('pelanggan.sukses');
    }
}
