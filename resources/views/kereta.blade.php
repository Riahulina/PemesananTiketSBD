<x-app-layout>

<section class="relative h-[530px] flex items-center justify-center bg-cover bg-center overflow-hidden">

    <!-- BACKGROUND IMAGE -->
    <img src="{{ asset('img/bgf.png') }}" 
         class="absolute inset-0 w-full h-full object-cover"
         alt="Background">

    <!-- GRADIENT OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/40 via-gray-900/80 to-red-700/90"></div>

    <!-- TEXT CONTENT -->
    <div class="relative z-10 text-center mt-10 px-4 animate-fade-in">
        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-2 leading-tight text-white">
            Perjalanan Kereta Api Anda,
        </h1>
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white drop-shadow-lg mb-4">
            Lebih Mudah dengan Satu Klik
        </h2>
        <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto">
            Pesan tiket kereta api dengan cepat, aman, dan nyaman.
        </p>
    </div>

</section>

<!-- FORM PENCARIAN (NAIK DI ATAS GAMBAR) -->
 <form action="{{ route('kereta.hasil') }}" method="GET">
     <!-- FORM PENCARIAN FIXED SESUAI DESAIN --> 
     <div class="max-w-5xl mx-auto bg-white text-gray-800 p-6 md:p-8 rounded-2xl shadow-2xl -mt-32 relative z-20 mx-4 md:mx-auto animate-fade-in">
  <!-- FORM PENCARIAN -->
<form action="{{ route('kereta.hasil') }}" method="GET"
class="relative z-20 -mt-2">

  <!-- Judul -->
  <div class="flex items-center gap-3 mb-6">
      <span class="text-3xl">🚆</span>
      <h3 class="text-red-600 font-extrabold text-2xl">
          Cari Tiket Kereta Api
      </h3>
  </div>

  <!-- Asal, Tujuan, Tanggal -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">

      <div>
          <label class="text-sm font-medium text-gray-600 mb-1 block">
              Stasiun Asal
          </label>
          <input type="text" name="asal"
              placeholder="Contoh: Jakarta Pusat"
              class="w-full border-2 border-gray-200 p-3 rounded-xl
                     focus:border-red-500 focus:ring-2 focus:ring-red-200
                     outline-none transition">
      </div>

      <div>
          <label class="text-sm font-medium text-gray-600 mb-1 block">
              Stasiun Tujuan
          </label>
          <input type="text" name="tujuan"
              placeholder="Contoh: Surabaya"
              class="w-full border-2 border-gray-200 p-3 rounded-xl
                     focus:border-red-500 focus:ring-2 focus:ring-red-200
                     outline-none transition">
      </div>

      <div>
          <label class="text-sm font-medium text-gray-600 mb-1 block">
              Tanggal Berangkat
          </label>
          <input type="date" name="tanggal"
              class="w-full border-2 border-gray-200 p-3 rounded-xl
                     focus:border-red-500 focus:ring-2 focus:ring-red-200
                     outline-none transition">
      </div>

  </div>

  <!-- Kelas & Tombol -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">

      <div class="md:col-span-2">
          <label class="text-sm font-medium text-gray-600 mb-1 block">
              Kelas Kereta
          </label>
          <select name="kelas"
              class="w-full border-2 border-gray-200 p-3 rounded-xl
                     focus:border-red-500 focus:ring-2 focus:ring-red-200
                     outline-none transition">
              <option value="">Semua Kelas</option>
              <option value="Ekonomi">Ekonomi</option>
              <option value="Bisnis">Bisnis</option>
              <option value="Eksekutif">Eksekutif</option>
          </select>
      </div>

      <button type="submit"
          class="h-[52px] bg-orange-500
                 text-white font-bold rounded-xl
                 flex items-center justify-center gap-2
                 hover:shadow-2xl hover:scale-105
                 transition-all duration-300 ">
          🔍 Cari Tiket
      </button>

  </div>

</div>
</form>

    </div>

    <section class="pt-32 pb-20 px-4 lg:px-8">

        <h1 class="text-3xl font-extrabold text-center mb-10 text-gray-800">
            Daftar Kereta Api
        </h1>
    
        @if($keretas->isEmpty())
            <p class="text-center text-gray-500">
                Tidak ada jadwal kereta pada tanggal tersebut.
            </p>
        @endif
    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($keretas as $kereta)
    
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden 
                        hover:shadow-2xl hover:-translate-y-1 
                        transition-all duration-300">
    
                <!-- Gambar -->
                <img src="{{ asset('storage/' . $kereta->gambar) }}"
                     alt="{{ $kereta->nama }}"
                     class="w-full h-48 object-cover">
    
                <div class="p-5 space-y-3">
    
                    <!-- Nama -->
                    <h2 class="text-xl font-bold text-gray-900">
                        {{ $kereta->nama }}
                    </h2>
    
                    <!-- Kelas + Tanggal -->
                    <div class="flex items-center justify-between text-sm">
                        <span class="px-3 py-1 rounded-full bg-orange-100 text-orange-600 font-medium">
                            {{ $kereta->kelas }}
                        </span>
    
                        <span class="text-gray-500">
                            {{ \Carbon\Carbon::parse($kereta->tanggal_berangkat)->format('d M Y') }}
                        </span>
                    </div>
    
                    <!-- Rute -->
                    <p class="text-sm text-gray-600">
                        <span class="font-medium">{{ $kereta->asal }}</span>
                        →
                        <span class="font-medium">{{ $kereta->tujuan }}</span>
                    </p>
    
                    <!-- Jam -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <span>🚆 {{ $kereta->jam_berangkat }}</span>
                        <span>🏁 {{ $kereta->jam_tiba }}</span>
                    </div>
    
                    <!-- Harga -->
                    <p class="text-xl font-extrabold text-orange-600">
                        Rp {{ number_format($kereta->harga, 0, ',', '.') }}
                    </p>
    
                    <a href="{{ route('pelanggan.create', ['kereta' => $kereta->id]) }}"
                        class="block text-center mt-4 bg-orange-500 text-white py-2.5 rounded-xl
                               font-semibold hover:scale-105 hover:shadow-lg transition-all">
                         Pesan Tiket
                     </a>
                     
                </div>
            </div>
    
            @endforeach
        </div>
    
    </section>
    
    <!-- Penawaran Section -->
    <section id="kelas-kereta" class="py-20 px-4 md:px-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Pilihan Kelas Kereta
        </h2>
        <p class="text-white/70 mb-12 max-w-2xl mx-auto">
            Sesuaikan perjalanan Anda dengan kenyamanan yang diinginkan
        </p>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    
            <!-- Ekonomi -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover:scale-105 transition duration-300">
                <div class="relative h-52">
                    <img src="{{ asset('img/ekonomi.png') }}"
                         class="absolute inset-0 w-full h-full object-cover"
                         alt="Kereta Ekonomi">
                    <span class="absolute top-4 left-4 bg-blue-100 text-blue-700 
                                 px-3 py-1 rounded-full text-sm font-semibold">
                        Ekonomi
                    </span>
                </div>
    
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Kelas Ekonomi</h3>
                    <p class="text-gray-600 mb-6">
                        Harga terjangkau untuk perjalanan nyaman sehari-hari
                    </p>
                    
                </div>
            </div>
    
            <!-- Bisnis -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover:scale-105 transition duration-300">
                <div class="relative h-52">
                    <img src="{{ asset('img/bisnis.png') }}"
                         class="absolute inset-0 w-full h-full object-cover"
                         alt="Kereta Bisnis">
                    <span class="absolute top-4 left-4 bg-orange-100 text-orange-700 
                                 px-3 py-1 rounded-full text-sm font-semibold">
                        Bisnis
                    </span>
                </div>
    
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Kelas Bisnis</h3>
                    <p class="text-gray-600 mb-6">
                        Kenyamanan ekstra dengan ruang duduk lebih lega
                    </p>
                   
                </div>
            </div>
    
            <!-- Eksekutif -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover:scale-105 transition duration-300">
                <div class="relative h-52">
                    <img src="{{ asset('img/eksekutif.png') }}"
                         class="absolute inset-0 w-full h-full object-cover"
                         alt="Kereta Eksekutif">
                    <span class="absolute top-4 left-4 bg-green-100 text-green-700 
                                 px-3 py-1 rounded-full text-sm font-semibold">
                        Eksekutif
                    </span>
                </div>
    
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">Kelas Eksekutif</h3>
                    <p class="text-gray-600 mb-6">
                        Memberikan perjalanan premium dengan fasilitas terbaik
                    </p>
                    
                </div>
            </div>
    
        </div>
    </section>
    

    <!-- Testimoni Section -->
    <section class="py-20 px-4 md:px-10 bg-gray-50">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Apa Kata Mereka?</h2>
            <p class="text-gray-600 mb-12">Ribuan pelanggan puas telah menggunakan layanan kami</p>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    
                <!-- Testimoni 1 -->
                <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-2xl hover-lift transition-all">
                    <div class="text-yellow-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Sangat mudah dan cepat! Tidak perlu antre lagi di stasiun."</p>
                    <p class="font-semibold">- Budi Santoso</p>
                </div>
    
                <!-- Testimoni 2 -->
                <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-2xl hover-lift transition-all">
                    <div class="text-yellow-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Harga terjangkau dengan promo yang menarik setiap bulan."</p>
                    <p class="font-semibold">- Siti Nurhaliza</p>
                </div>
    
                <!-- Testimoni 3 -->
                <div class="bg-white text-gray-900 p-6 rounded-2xl shadow-2xl hover-lift transition-all">
                    <div class="text-yellow-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-gray-700 mb-4">"Aplikasi terbaik untuk booking tiket kereta. Highly recommended!"</p>
                    <p class="font-semibold">- Ahmad Wijaya</p>
                </div>
    
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="py-12 px-4 md:px-10 border-t border-white/10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

            <div>
                <h3 class="text-2xl font-bold gradient-text mb-4">Ticket.ze</h3>
                <p class="text-gray-700 mb-4">Platform pemesanan tiket kereta api terpercaya di Indonesia.</p>
            </div> 

            <div>
                <h4 class="font-bold mb-4">Kontak</h4>
                <ul class="space-y-2 text-gray-700">
                    <li>📧 info@ticketize.com</li>
                    <li>📞 +62 21 1234 5678</li>
                    <li>📍Medan, Indonesia</li>
                </ul>
            </div>

        </div>

        <div class="text-center text-gray-700 mt-12 pt-8 border-t border-white/10">
            © 2025 Ticketize. Semua Hak Dilindungi.
        </div>
    </footer>
</x-app-layout>