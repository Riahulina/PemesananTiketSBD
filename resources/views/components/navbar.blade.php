<header class="fixed top-0 left-0 right-0 z-30 bg-[#0c162f]/25 backdrop-blur-md shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

        <!-- Logo + Brand -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" 
                 alt="Logo" 
                 class="h-12 w-auto object-contain">
            <h1 class="text-xl md:text-2xl font-bold text-white tracking-wide">
                Ticketize
            </h1>
        </div>

        <!-- Hamburger Button (Mobile) -->
        <button id="menu-btn" 
                class="md:hidden flex flex-col space-y-1.5 focus:outline-none">
            <span class="w-6 h-0.5 bg-white transition"></span>
            <span class="w-6 h-0.5 bg-white transition"></span>
            <span class="w-6 h-0.5 bg-white transition"></span>
        </button>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex items-center gap-10 text-white/90 font-medium">

            <li>
                <a href="/"
                   class="{{ request()->is('/') ? 'text-orange-400 font-semibold' : 'hover:text-orange-400' }} transition">
                    Beranda
                </a>
            </li>
        
            <li>
                <a href="/kereta"
                   class="{{ request()->is('kereta') ? 'text-orange-400 font-semibold' : 'hover:text-orange-400' }} transition">
                    Kereta Api
                </a>
            </li>
        
            <li>
                <a href="/bantuan"
                   class="{{ request()->is('bantuan') ? 'text-orange-400 font-semibold' : 'hover:text-orange-400' }} transition">
                    Bantuan
                </a>
            </li>
        
            <li>
                <a href="/tentang"
                   class="{{ request()->is('tentang') ? 'text-orange-400 font-semibold' : 'hover:text-orange-400' }} transition">
                    Tentang Kami
                </a>
            </li>
        
        </ul>
        

        <!-- Auth Section (Desktop) -->
        <div class="hidden md:flex items-center space-x-3">

            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" 
                                 class="w-8 h-8 rounded-full" alt="profile">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth

            @guest
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 bg-orange-500 rounded-lg font-semibold text-white hover:bg-orange-600 transition">
                    Login
                </a>

                <a href="{{ route('register') }}" 
                   class="px-4 py-2 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition">
                    Daftar
                </a>
            @endguest
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-[#0c162f]/70 backdrop-blur-md shadow-md">
        <ul class="flex flex-col p-4 space-y-4 text-white/90 font-medium">
            <li><a href="/" class="hover:text-orange-400 transition">Beranda</a></li>
            <li><a href="/kereta" class="hover:text-orange-400 transition">Kereta Api</a></li>
            <li><a href="/bantuan" class="text-orange-400 font-semibold">Bantuan</a></li>
            <li><a href="/tentang" class="hover:text-orange-400 transition">Tentang Kami</a></li>

            <!-- Auth Section Mobile -->
            @auth
                <div class="border-t border-white/10 pt-4">
                    <a href="/profile" class="block py-2 hover:text-orange-400">Profile</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="block py-2 text-left w-full hover:text-orange-400">
                            Log Out
                        </button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="pt-3 flex gap-3">
                    <a href="{{ route('login') }}" 
                       class="flex-1 px-4 py-2 bg-orange-500 rounded-lg text-center font-semibold hover:bg-orange-600 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" 
                       class="flex-1 px-4 py-2 bg-white text-gray-900 rounded-lg text-center font-semibold hover:bg-gray-100 transition">
                        Daftar
                    </a>
                </div>
            @endguest
        </ul>
    </div>
</header>
