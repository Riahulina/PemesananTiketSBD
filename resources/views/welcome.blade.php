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

            <div class="relative z-20 text-center w-full max-w-4xl px-4">
                
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-10 leading-tight drop-shadow-xl">
                    Perjalanan Kereta Api Anda,<br> Lebih Mudah dengan Satu Klik
                </h1>

                <!-- FORM PENCARIAN -->
                <form action="{{ route('kereta.hasil') }}" method="GET">

                    <div class="max-w-5xl  bg-white text-gray-800 p-6 md:p-8 
                                rounded-2xl shadow-2xl -mt-2 relative z-20 
                                mx-4 md:mx-auto animate-fade-in">

                        <!-- HEADER FORM -->
                        <div class="flex items-center gap-2 mb-4">
                            <span class="text-2xl">🚆</span>
                            <h3 class="text-red-600 font-bold text-xl">
                                Cari Tiket Kereta Api
                            </h3>
                        </div>

                        <!-- INPUT GRID -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">

                            <!-- ASAL -->
                            <div>
                                <label class="text-sm text-gray-600 mb-1 block">Stasiun Asal</label>
                                <input type="text" name="asal" placeholder="Contoh: Jakarta Pusat" 
                                       class="border-2 border-gray-200 p-3 rounded-lg w-full 
                                       focus:border-red-500 focus:outline-none transition">
                            </div>

                            <!-- TUJUAN -->
                            <div>
                                <label class="text-sm text-gray-600 mb-1 block">Stasiun Tujuan</label>
                                <input type="text" name="tujuan" placeholder="Contoh: Surabaya" 
                                       class="border-2 border-gray-200 p-3 rounded-lg w-full
                                       focus:border-red-500 focus:outline-none transition">
                            </div>

                            <!-- TANGGAL -->
                            <div>
                                <label class="text-sm text-gray-600 mb-1 block">Tanggal Keberangkatan</label>
                                <input type="date" name="tanggal"
                                       class="border-2 border-gray-200 p-3 rounded-lg w-full
                                       focus:border-red-500 focus:outline-none transition">
                            </div>

                        </div>

                        <!-- KELAS & TOMBOL -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                            <select name="kelas" 
                                    class="border-2 border-gray-200 p-3 rounded-lg w-full 
                                    focus:border-red-500 focus:outline-none transition">
                                <option value="">Semua Kelas</option>
                                <option value="Ekonomi">1. Ekonomi</option>
                                <option value="Bisnis">2. Bisnis</option>
                                <option value="Eksekutif">3. Eksekutif</option>
                            </select>

                            <button type="submit"
                                class="bg-gradient-to-r from-red-500 to-orange-500 
                                       text-gray-600 p-3 rounded-lg font-bold 
                                       hover:shadow-xl hover:scale-105 
                                       transition-all duration-300 md:col-span-2">
                                🔍 Cari Tiket Sekarang
                            </button>

                        </div>

                    </div>
                </form>

            </div>
        </section>

    </div>

</x-app-layout>
