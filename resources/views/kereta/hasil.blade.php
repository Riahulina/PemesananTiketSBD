<x-app-layout>
<div class="max-w-6xl mx-auto p-6">

    <h2 class="text-2xl font-bold mb-6 text-gray-800">Hasil Pencarian Kereta</h2>

    @if($keretas->count() == 0)
        <div class="bg-red-50 text-red-600 p-4 rounded-xl border border-red-200">
            Tidak ada kereta yang cocok dengan pencarian.
        </div>
    @endif

    <!-- CONTAINER WRAPPER -->
    <div class="bg-gray-100/80 rounded-3xl p-6 md:p-10 shadow-xl text-center">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($keretas as $k)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-[1.02] transition-all duration-300">

                <!-- GAMBAR -->
                <div class="h-44 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $k->gambar) }}"
                         class="w-full h-full object-cover">
                </div>

                <!-- ISI CARD -->
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-800 mb-1">
                        {{ $k->nama }}
                    </h3>

                    <p class="text-sm text-orange-600 font-semibold mb-3">
                        {{ $k->kelas }}
                    </p>

                    <div class="text-sm space-y-1 text-gray-700">
                        <p>🛫 <span class="font-semibold">{{ $k->asal }}</span> → 🛬 <span class="font-semibold">{{ $k->tujuan }}</span></p>
                        <p>⏰ {{ $k->jam_berangkat }} - {{ $k->jam_tiba }}</p>
                    </div>

                    <p class="text-xl font-extrabold text-red-600 mt-4">
                        Rp {{ number_format($k->harga, 0, ',', '.') }}
                    </p>

                    <!-- Tombol -->
                    <a href="#" 
                    class="block text-center mt-4 bg-orange-500 text-white py-2 rounded-lg font-semibold 
                           hover:bg-orange-600 transition">
                     Pesan Tiket
                 </a>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</div>


</x-app-layout>