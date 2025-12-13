<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Kereta;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
     * Simpan pelanggan + pemesanan
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_pelanggan' => 'required|string|max:100',
            'nohp_pelanggan' => 'required|string|max:20',
            'alamat' => 'required|string',
            'kereta_id' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $pelanggan = Pelanggan::firstOrCreate(
            ['email' => $request->email],
            [
                'nama_pelanggan' => $request->nama_pelanggan,
                'nohp_pelanggan' => $request->nohp_pelanggan,
                'alamat' => $request->alamat,
            ]
        );

        $kereta = Kereta::findOrFail($request->kereta_id);

        Pemesanan::create([
            'id_pelanggan' => $pelanggan->id_pelanggan,
            'kereta_id' => $kereta->id,
            'tanggal_pemesanan' => now(),
            'jadwal' => Carbon::parse($kereta->tanggal_berangkat)->format('d M Y')
                        . ' | ' . $kereta->jam_berangkat
                        . ' - ' . $kereta->jam_tiba,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => 'pending',
        ]);

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
