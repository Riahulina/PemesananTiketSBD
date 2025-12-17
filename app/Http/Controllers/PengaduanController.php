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

  public function index()
  {
    $pengaduans = Pengaduan::where('user_id', auth()->id())
      ->latest()
      ->get();

    return view('pengaduan.index', compact('pengaduans'));
  }


  public function store(Request $request)
  {
    $request->validate([
      'judul' => 'required|string|max:255',
      'deskripsi' => 'required|string',
      'kategori' => 'nullable|string|max:100',
    ]);

    $pengaduan = Pengaduan::create([
      'user_id'   => auth()->id(),
      'judul'     => $request->judul,
      'deskripsi' => $request->deskripsi,
      'kategori'  => $request->kategori,
      'status'    => 'diproses',
    ]);


    return redirect()
      ->route('pengaduan.show', $pengaduan)
      ->with('success', 'Pengaduan berhasil dikirim');
  }
  public function show(Pengaduan $pengaduan)
  {
    abort_if($pengaduan->user_id !== auth()->id(), 403);

    $pengaduan->load([
      'tanggapans.admin'
    ]);

    return view('pengaduan.show', compact('pengaduan'));
  }
}
