<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    // Menampilkan halaman form pencarian
    public function index()
    {
        return view('kereta.cari');
    }

    // Menampilkan hasil pencarian
    public function hasil(Request $request)
    {
        $keretas = Kereta::query()
            ->when($request->asal, fn ($q) => $q->where('asal', 'like', "%{$request->asal}%"))
            ->when($request->tujuan, fn ($q) => $q->where('tujuan', 'like', "%{$request->tujuan}%"))
            ->when($request->kelas, fn ($q) => $q->where('kelas', $request->kelas))
            ->where('tanggal_berangkat', $request->tanggal)
            ->get();

        return view('kereta.hasil', compact('keretas'));
    }
}
