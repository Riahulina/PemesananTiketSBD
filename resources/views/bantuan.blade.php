<x-app-layout>

    <!-- Header -->
    <section class="pt-32 pb-20 px-4 text-center  text-white relative h-[750px] flex items-center justify-center bg-cover bg-center overflow-hidden">
        <img src="{{ asset('img/bgf.png') }}" 
         class="absolute inset-0 w-full h-full object-cover"
         alt="Background">

        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/40 via-gray-900/80 to-red-700/90"></div>

        <div class="relative z-10 max-w-4xl mx-auto">
            <div class="text-5xl mb-4">💡</div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Pusat Bantuan Ticketize</h1>
            <p class="text-lg md:text-xl text-white/80 mb-8">Temukan jawaban cepat untuk semua pertanyaan Anda</p>

            <!-- Search Box -->
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="🔍 Cari bantuan... (contoh: cara pembayaran, pembatalan tiket)" 
                        class="w-full px-6 py-4 rounded-full bg-white text-gray-900 text-lg focus:outline-none focus:ring-4 focus:ring-red-500/50"
                    >
                    <button class="absolute right-2 top-2 px-6 py-2 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="max-w-6xl mx-auto px-4 py-12 -mt-4 relative z-20">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    
            <a href="#faq" 
               class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="text-4xl mb-3">❓</div>
                <p class="font-semibold text-gray-800">FAQ</p>
            </a>
    
            <a href="#cara-pesan" 
               class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="text-4xl mb-3">🎫</div>
                <p class="font-semibold text-gray-800">Cara Pesan</p>
            </a>
    
            <a href="#pembayaran" 
               class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="text-4xl mb-3">💳</div>
                <p class="font-semibold text-gray-800">Pembayaran</p>
            </a>
    
            <a href="#kontak" 
               class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <div class="text-4xl mb-3">📞</div>
                <p class="font-semibold text-gray-800">Hubungi Kami</p>
            </a>
    
        </div>
    </section>
    

    <!-- Panduan Pemesanan -->
    <section id="cara-pesan" class="max-w-4xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold mb-10 text-center text-gray-900 fade-up">
            📖 Panduan Pemesanan Tiket
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
    
            <!-- Step 1 -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl fade-up fade-delay-1">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-orange-500 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 text-white">
                    1
                </div>
                <h3 class="font-bold text-xl mb-2">Pilih Rute</h3>
                <p class="text-gray-600">Masukkan stasiun asal dan tujuan perjalanan Anda</p>
            </div>
    
            <!-- Step 2 -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl fade-up fade-delay-2">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-orange-500 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 text-white">
                    2
                </div>
                <h3 class="font-bold text-xl mb-2">Pilih Jadwal</h3>
                <p class="text-gray-600">Tentukan tanggal dan jam keberangkatan yang sesuai</p>
            </div>
    
            <!-- Step 3 -->
            <div class="bg-white text-gray-900 rounded-2xl shadow-xl p-6 flex flex-col items-center justify-center 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl fade-up fade-delay-3">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-orange-500 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 text-white">
                    3
                </div>
                <h3 class="font-bold text-xl mb-2">Bayar & Selesai</h3>
                <p class="text-gray-600">Lakukan pembayaran dan terima e-ticket Anda</p>
            </div>
    
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="faq" class="max-w-4xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold mb-4 text-center text-gray-900">❔ Pertanyaan yang Sering Diajukan</h2>
        <p class="text-center text-gray-600 mb-10">Klik pertanyaan untuk melihat jawaban lengkap</p>

        <div class="space-y-4">

            <details class="bg-white shadow-lg border border-gray-200 p-6 rounded-xl">
                <summary class="cursor-pointer font-semibold text-lg text-gray-900">Bagaimana cara memesan tiket kereta?</summary>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-700 leading-relaxed">
                        1. Kunjungi halaman utama Ticketize<br>
                        2. Masukkan stasiun asal dan tujuan<br>
                        3. Pilih tanggal keberangkatan<br>
                        4. Pilih jumlah penumpang dan kelas kereta<br>
                        5. Klik "Cari Tiket" dan pilih jadwal<br>
                        6. Isi data penumpang lalu bayar
                    </p>
                </div>
            </details>

            <details class="bg-white shadow-lg border border-gray-200 p-6 rounded-xl">
                <summary class="cursor-pointer font-semibold text-lg text-gray-900">Apakah saya bisa membatalkan tiket?</summary>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-700 leading-relaxed">
                        Ya, pembatalan dapat dilakukan:<br>
                        • Minimal 24 jam sebelum berangkat<br>
                        • Biaya pembatalan 25%<br>
                        • Refund 3–7 hari kerja<br>
                        • Lewat halaman “Pesanan Saya”
                    </p>
                </div>
            </details>

            <details id="pembayaran" class="bg-white shadow-lg border border-gray-200 p-6 rounded-xl">
                <summary class="cursor-pointer font-semibold text-lg text-gray-900">Metode pembayaran apa saja?</summary>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-700 mb-3">Kami menerima:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="bg-gray-50 p-3 rounded-lg">
                            <p class="font-semibold text-red-500 mb-1">💳 Kartu Kredit</p>
                            <p class="text-sm text-gray-600">Visa, Mastercard, JCB</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg">
                            <p class="font-semibold text-red-500 mb-1">🏦 Transfer Bank</p>
                            <p class="text-sm text-gray-600">BCA, Mandiri, BNI, BRI</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg">
                            <p class="font-semibold text-red-500 mb-1">📱 E-Wallet</p>
                            <p class="text-sm text-gray-600">GoPay, OVO, Dana</p>
                        </div>
                        <div class="bg-gray-50 p-3 rounded-lg">
                            <p class="font-semibold text-red-500 mb-1">🏪 Minimarket</p>
                            <p class="text-sm text-gray-600">Alfamart, Indomaret</p>
                        </div>
                    </div>
                </div>
            </details>

            <details class="bg-white shadow-lg border border-gray-200 p-6 rounded-xl">
                <summary class="cursor-pointer font-semibold text-lg text-gray-900">Bagaimana jika tidak menerima e-ticket?</summary>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-gray-700 leading-relaxed">
                        • Cek spam email<br>
                        • Pastikan email benar<br>
                        • Download ulang via “Pesanan Saya”<br>
                        • Hubungi CS dengan nomor pesanan
                    </p>
                </div>
            </details>

        </div>
    </section>

</x-app-layout>
