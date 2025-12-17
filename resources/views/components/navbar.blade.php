<header class="fixed top-0 left-0 right-0 z-30 bg-[#0c162f]/25 backdrop-blur-md shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-12 w-auto object-contain">
            <h1 class="text-xl md:text-2xl font-bold text-white tracking-wide">
                Ticket.ez
            </h1>
        </div>

        <!-- Hamburger -->
        <button id="menu-btn" class="md:hidden flex flex-col space-y-1.5 focus:outline-none">
            <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
            <span class="w-6 h-0.5 bg-white transition-all duration-300"></span>
        </button>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex items-center gap-10 text-white/90 font-medium">
            <li><a href="/" class="hover:text-orange-400 transition">Beranda</a></li>
            <li><a href="/kereta" class="hover:text-orange-400 transition">Kereta Api</a></li>
            <li><a href="/bantuan" class="hover:text-orange-400 transition">Bantuan</a></li>
            <li><a href="/tentang" class="hover:text-orange-400 transition">Tentang Kami</a></li>
        </ul>

        <!-- Auth Desktop -->
        <div class="hidden md:flex items-center space-x-3">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button>
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                 class="w-8 h-8 rounded-full" alt="profile">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('pesanan.index')">
                            Pesanan Saya
                        </x-dropdown-link>

                        <div class="border-t my-1"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="px-4 py-2 bg-orange-500 rounded-lg text-white font-semibold">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-white text-gray-900 rounded-lg font-semibold">
                    Daftar
                </a>
            @endguest
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0c162f]/70 backdrop-blur-md shadow-md">
        <ul class="flex flex-col p-4 space-y-4 text-white font-medium">
            <li><a href="/">Beranda</a></li>
            <li><a href="/kereta">Kereta Api</a></li>
            <li><a href="/bantuan">Bantuan</a></li>
            <li><a href="/tentang">Tentang Kami</a></li>

            @auth
                <x-responsive-nav-link :href="route('profile.edit')">Profile</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('pesanan.index')">Pesanan Saya</x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Log Out
                    </x-responsive-nav-link>
                </form>
            @endauth

            @guest
                <div class="flex gap-3 pt-3">
                    <a href="{{ route('login') }}" class="flex-1 bg-orange-500 py-2 rounded-lg text-center">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="flex-1 bg-white text-gray-900 py-2 rounded-lg text-center">
                        Daftar
                    </a>
                </div>
            @endguest
        </ul>
    </div>
</header>
