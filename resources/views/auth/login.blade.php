<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

            <!-- Title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Masuk Akun</h2>
                <p class="text-gray-500 text-sm mt-1">
                    Silakan masuk untuk melanjutkan
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-lg"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <x-text-input id="password"
                        class="block mt-1 w-full rounded-lg"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center text-sm text-gray-600">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-orange-500 focus:ring-orange-500"
                               name="remember">
                        <span class="ms-2">Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-sm text-orange-500 hover:underline">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit"
                        class="w-full bg-orange-500 text-white py-3 rounded-xl
                               font-semibold hover:bg-orange-600 transition">
                    Masuk
                </button>
            </form>

            <!-- Divider -->
            <div class="my-6 flex items-center">
                <div class="flex-grow border-t"></div>
                <span class="px-3 text-sm text-gray-400">atau</span>
                <div class="flex-grow border-t"></div>
            </div>

            <!-- Register -->
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-3">
                    Belum punya akun?
                </p>
                <a href="{{ route('register') }}"
                   class="block w-full border border-orange-500 text-orange-500
                          py-3 rounded-xl font-semibold
                          hover:bg-red-50 transition">
                    Daftar Sekarang
                </a>
            </div>

        </div>
    </div>
</x-guest-layout>
