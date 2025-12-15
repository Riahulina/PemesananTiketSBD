<x-app-layout>
    <section class="pt-32 pb-20 px-4 max-w-xl mx-auto">

        <div class="bg-white rounded-2xl shadow-2xl p-8 text-center">

            <div class="text-5xl mb-4">🎉</div>

            <h1 class="text-2xl font-bold mb-2 text-gray-800">
                Pemesanan Berhasil!
            </h1>

            <p class="text-gray-600 mb-6">
                Simpan kode tiket Anda untuk proses selanjutnya
            </p>

            <!-- KODE TIKET -->
            <div class="border-2 border-dashed border-orange-400
                        rounded-xl p-4 mb-6 bg-orange-50">
                <p class="text-sm text-gray-600">Kode Tiket</p>
                <p class="text-2xl font-extrabold text-orange-600 tracking-widest">
                    {{ $tiket->kode_tiket }}
                </p>
            </div>

            <!-- DETAIL -->
            <div class="text-left space-y-3 text-sm text-gray-700">

                <div class="flex justify-between">
                    <span>Nama Kereta</span>
                    <span class="font-medium">{{ $tiket->kereta->nama }}</span>
                </div>

                <div class="flex justify-between">
                    <span>Jadwal</span>
                    <span class="font-medium">{{ $tiket->jadwal }}</span>
                </div>

                <div class="flex justify-between">
                    <span>Metode Pembayaran</span>
                    <span class="font-medium">
                        {{ $tiket->pemesanan->metode_pembayaran }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span>Status Tiket</span>
                    <span class="font-semibold text-green-600">
                        {{ strtoupper($tiket->status_tiket) }}
                    </span>
                </div>

            </div>

            <!-- BUTTON -->
            <a href="/kereta"
               class="block mt-8 bg-orange-500 text-white py-3 rounded-xl
                      font-semibold hover:bg-orange-600 transition">
                Kembali ke Beranda
            </a>

        </div>

    </section>
</x-app-layout>
