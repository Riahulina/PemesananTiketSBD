<x-app-layout>

    <div class="bg-gray-200 min-h-screen text-gray-800">

        <!-- HERO SECTION -->
        <section class="relative h-[98vh] flex items-center justify-center">

            <!-- BACKGROUND IMAGE -->
            <img src="{{ asset('img/bgf.png') }}" 
                 class="absolute inset-0 w-full h-full object-cover">

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-b 
                from-gray-900/40 via-gray-900/80 to-red-700/90"></div>

            <div class="relative z-20 flex flex-col items-center text-center 
                w-full max-w-4xl px-6">

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white 
                    mb-6 leading-tight drop-shadow-xl">
                    Perjalanan Kereta Api Anda,<br>
                    Lebih Mudah dengan Satu Klik
                </h1>

                <div class="text-base sm:text-lg text-white 
                    mb-10 space-y-1 drop-shadow-lg">
                    <p>Mau pergi tapi takut kehabisan tiket?</p>
                    <p>Kini <span class="font-semibold">Tiket.ez</span> hadir sebagai solusi untuk kamu.</p>
                    <p>Pesan tiket kereta api secara online dengan cepat dan mudah.</p>
                </div>

                <a href="/kereta">
                    <button
                        class="px-8 py-3 bg-orange-500 text-white rounded-xl 
                            font-semibold text-base sm:text-lg
                            hover:bg-orange-600 hover:scale-105
                            transition-all duration-300 shadow-md">
                        Beli Sekarang
                    </button>
                </a>
            </div>

        </section>

    </div>
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
