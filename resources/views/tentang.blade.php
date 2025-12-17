<x-app-layout>
    <section class="relative h-[800px] flex items-center justify-center bg-cover bg-center overflow-hidden">

        <!-- BACKGROUND IMAGE -->
        <img src="{{ asset('img/bgf.png') }}" 
             class="absolute inset-0 w-full h-full object-cover"
             alt="Background">
    
        <!-- GRADIENT OVERLAY -->
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/40 via-gray-900/80 to-red-700/90"></div>
    
        <!-- TEXT CONTENT -->
        <div class="relative z-10 text-center mt-10 px-4 animate-fade-in">
            <h1 class="text-4xl md:text-6xl text-white font-bold mb-6">Tentang Ticket.ze</h1>
            <p class="text-lg md:text-xl text-white/80 max-w-3xl mx-auto leading-relaxed">
                Platform pemesanan tiket kereta api modern yang dirancang untuk memberikan pengalaman pemesanan yang cepat, mudah, dan aman bagi seluruh pengguna di Indonesia.
            </p>
        </div>
    
    </section>

    <!-- Values -->
    <section class="bg-gradient-to-r from-red-500/10 to-orange-500/10 py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Nilai-Nilai Kami</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Item -->
                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold mb-3">Keamanan</h3>
                    <p class="text-gray-800">Melindungi data dan transaksi pengguna dengan sistem keamanan terbaik</p>
                </div>

                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">⚡</div>
                    <h3 class="text-xl font-bold mb-3">Kecepatan</h3>
                    <p class="text-gray-800">Proses booking yang cepat dan efisien tanpa hambatan</p>
                </div>

                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">💎</div>
                    <h3 class="text-xl font-bold mb-3">Kualitas</h3>
                    <p class="text-gray-800">Komitmen memberikan layanan berkualitas tinggi setiap saat</p>
                </div>

                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold mb-3">Kepercayaan</h3>
                    <p class="text-gray-800">Membangun hubungan jangka panjang dengan transparansi</p>
                </div>

                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">🌟</div>
                    <h3 class="text-xl font-bold mb-3">Inovasi</h3>
                    <p class="text-gray-800">Terus berinovasi untuk pengalaman pengguna terbaik</p>
                </div>

                <div class="glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-lift">
                    <div class="text-5xl mb-4">❤️</div>
                    <h3 class="text-xl font-bold mb-3">Kepuasan</h3>
                    <p class="text-gray-800">Mengutamakan kepuasan pelanggan dalam setiap layanan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="px-4 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Bertemu dengan Tim Kami</h2>
                <p class="text-gray-700 text-lg">Orang-orang luar biasa di balik Ticket.ze</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Card 1 -->
                <div class="text-center glass-effect p-8 rounded-2xl shadow-lg">
                    <img src="img/ria.jpg" 
                         class="w-32 h-32 mx-auto rounded-full mb-6 border-4 border-red-500/30">
                    <h3 class="text-2xl font-bold mb-2">Riah Ulina</h3>
                    <p class="text-red-400 font-semibold mb-3">Programer</p>
                    <p class="text-gray-700 text-sm mb-4">
                        Programmer yang mengembangkan sistem Ticket.ze agar berjalan stabil dan efisien
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="text-center glass-effect p-8 rounded-2xl shadow-lg">
                    <img src="img/uswa.jpg" 
                         class="w-32 h-32 mx-auto rounded-full mb-6 border-4 border-red-500/30">
                    <h3 class="text-2xl font-bold mb-2">Syafitri Uswatun</h3>
                    <p class="text-red-400 font-semibold mb-3">UI Designer</p>
                    <p class="text-gray-700 text-sm mb-4">
                        UI Designer yang merancang tampilan Ticketize dengan fokus kenyamanan pengguna
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="text-center glass-effect p-8 rounded-2xl shadow-lg">
                    <img src="img/ditaa.JPG" 
                         class="w-32 h-32 mx-auto rounded-full mb-6 border-4 border-red-500/30">
                    <h3 class="text-2xl font-bold mb-2">Dita Liana</h3>
                    <p class="text-red-400 font-semibold mb-3">Perancangan Sistem</p>
                    <p class="text-gray-700 text-sm mb-4">
                        Bertanggung jawab merancang alur, struktur, dan kebutuhan sistem Ticket.ze
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="text-center glass-effect p-8 rounded-2xl shadow-lg">
                    <img src="img/naya.JPG" 
                         class="w-32 h-32 mx-auto rounded-full mb-6 border-4 border-red-500/30">
                    <h3 class="text-2xl font-bold mb-2">Nurul Inayah</h3>
                    <p class="text-red-400 font-semibold mb-3">Perancangan Sistem</p>
                    <p class="text-gray-700 text-sm mb-4">
                        Bertanggung jawab merancang alur, struktur, dan kebutuhan sistem Ticket.ze
                    </p>
                </div>
                

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 px-4 text-center">
        <div class="max-w-3xl mx-auto glass-effect p-12 rounded-2xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Bergabunglah dengan Perjalanan Kami</h2>
            <p class="text-gray-700 mb-8 text-lg">
                Mulai pengalaman pemesanan tiket kereta yang lebih baik hari ini
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class=" glass-effect p-8  text-center bg-white text-gray-900 rounded-2xl shadow-2xl overflow-hidden hover-liftpx-8 py-4 bg-gradient-to-r from-red-500 to-orange-500 font-bold text-lg hover:shadow-2xl hover:scale-105 transition">
                    🎫 Pesan Tiket Sekarang
                </button>

                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-4 md:px-10 border-t border-white/10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

            <div>
                <h3 class="text-2xl font-bold gradient-text mb-4">Ticketize</h3>
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
