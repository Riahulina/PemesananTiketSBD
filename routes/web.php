<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengaduanController;


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

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/pengaduan', [PengaduanController::class, 'create'])
        ->name('pengaduan.create');

    Route::post('/pengaduan', [PengaduanController::class, 'store'])
        ->name('pengaduan.store');
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

Route::post('/beli-tiket', [PemesananController::class, 'store'])
    ->name('beli-tiket.store');

Route::get('/cari-kereta', [KeretaController::class, 'index'])->name('kereta.cari');
Route::get('/hasil-kereta', [KeretaController::class, 'hasil'])->name('kereta.hasil');


Route::post('/beli-tiket', [PemesananController::class, 'store'])
    ->name('beli-tiket.store');

Route::get('tiket/{kode}/struk', [TiketController::class, 'struk'])
    ->name('tiket.struk');
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');


// Route::post('/tiket/{kode}/struk', [TiketController::class, 'struk'])
//     ->name('tiket.struk');

    Route::get('/tiket/{kode}/qr', function ($kode) {
        return response()->stream(function () use ($kode) {
            echo \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)
                ->generate($kode);
        }, 200, ['Content-Type' => 'image/svg+xml']);
    })->name('tiket.qr');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
