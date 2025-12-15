<x-app-layout>
    <div class="min-h-screen pt-24 flex items-center justify-center bg-gradient-to-br from-orange-50 to-white px-4">

        <div class="bg-white w-full max-w-xl rounded-2xl shadow-lg overflow-hidden">

            <!-- HEADER -->
            <div class="bg-orange-500 text-white text-center py-4">
                <h2 class="text-2xl font-bold tracking-wide">
                    🎫 Struk Pemesanan Tiket
                </h2>
                <p class="text-sm opacity-90">
                    Terima kasih telah melakukan pemesanan
                </p>
            </div>

            <!-- BODY -->
            <div class="p-6 space-y-5 text-sm text-gray-700">

                <!-- INFO TIKET -->
                <div class="grid grid-cols-2 gap-3">
                    <p class="font-semibold text-gray-600">Kode Tiket</p>
                    <p class="text-right font-mono text-orange-500">
                        {{ $tiket->kode_tiket }}
                    </p>

                    <p class="font-semibold text-gray-600">Status</p>
                    <span class="text-right inline-block px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                        {{ ucfirst($tiket->status_tiket) }}
                    </span>
                </div>

                <hr>

                <!-- DATA PELANGGAN -->
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        👤 Data Pelanggan
                    </h3>
                    <div class="space-y-1">
                        <p><strong>Nama:</strong> {{ $tiket->pelanggan->nama_pelanggan }}</p>
                        <p><strong>Email:</strong> {{ $tiket->pelanggan->email }}</p>
                        <p><strong>No HP:</strong> {{ $tiket->pelanggan->nohp_pelanggan }}</p>
                        <p><strong>Alamat:</strong> {{ $tiket->pelanggan->alamat }}</p>
                    </div>
                </div>

                <hr>

                <!-- DATA PERJALANAN -->
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">
                        🚆 Detail Perjalanan
                    </h3>
                    <div class="space-y-1">
                        <p><strong>Kereta:</strong> {{ $tiket->kereta->nama }}</p>
                        <p><strong>Jadwal:</strong> {{ $tiket->jadwal }}</p>
                    </div>
                </div>

                <!-- QR -->
                <div class="flex flex-col items-center pt-4">
                    <div class="bg-gray-50 p-4 rounded-xl shadow-inner">
                        <img 
                            src="{{ route('tiket.qr', $tiket->kode_tiket) }}"
                            alt="QR Tiket"
                            class="w-40 h-40"
                        >
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        Tunjukkan QR ini saat keberangkatan
                    </p>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="bg-gray-50 text-center py-3 text-xs text-gray-500">
                © {{ date('Y') }} Pemesanan Tiket Kereta • Semua Hak Dilindungi
            </div>

        </div>
    </div>
</x-app-layout>
