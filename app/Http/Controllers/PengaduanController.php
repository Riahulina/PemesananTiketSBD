<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
        ]);
    
        Pengaduan::create([
            'user_id' => auth()->id(), // ✅ AMAN
            'judul'   => $request->judul,
            'status'  => 'open',
        ]);
    
        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim');
    }
    
}
