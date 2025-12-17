<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

            <!-- Title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Buat Akun</h2>
                <p class="text-gray-500 text-sm mt-1">
                    Daftar untuk mulai menggunakan Tiket.EZ
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama Lengkap')" class="text-gray-700" />
                    <x-text-input id="name"
                        class="block mt-1 w-full rounded-lg"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email"
                        class="block mt-1 w-full rounded-lg"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
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
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-gray-700" />
                    <x-text-input id="password_confirmation"
                        class="block mt-1 w-full rounded-lg"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <button type="submit"
                        class="w-full bg-orange-500 text-white py-3 rounded-xl
                               font-semibold hover:bg-orange-600 transition">
                    Daftar
                </button>
            </form>

            <!-- Divider -->
            <div class="my-6 flex items-center">
                <div class="flex-grow border-t"></div>
                <span class="px-3 text-sm text-gray-400">atau</span>
                <div class="flex-grow border-t"></div>
            </div>

            <!-- Login -->
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-3">
                    Sudah punya akun?
                </p>
                <a href="{{ route('login') }}"
                   class="block w-full border border-orange-500 text-orange-500
                          py-3 rounded-xl font-semibold
                          hover:bg-red-50 transition">
                    Masuk Sekarang
                </a>
            </div>

        </div>
    </div>
</x-guest-layout>
