<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/kereta', function () {
    return view('kereta');
});
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Models\Kereta;

Route::get('/kereta', function () {
    $keretas = Kereta::all();
    return view('kereta', compact('keretas'));
});


// 1️⃣ HALAMAN SUKSES (WAJIB DI ATAS)
Route::get('/beli-tiket/sukses', [PelangganController::class, 'sukses'])
    ->name('pelanggan.sukses');

// 2️⃣ FORM BELI TIKET (PAKAI KERETA)
Route::get('/beli-tiket/{kereta}', [PelangganController::class, 'create'])
    ->name('pelanggan.create');

// 3️⃣ SIMPAN DATA
Route::post('/beli-tiket', [PelangganController::class, 'store'])
    ->name('pelanggan.store');

Route::get('/cari-kereta', [KeretaController::class, 'index'])->name('kereta.cari');
Route::get('/hasil-kereta', [KeretaController::class, 'hasil'])->name('kereta.hasil');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
