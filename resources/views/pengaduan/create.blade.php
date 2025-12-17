<!-- resources/views/pengaduan/create.blade.php -->
<x-app-layout>
  <div class="flex min-h-screen flex-col items-center justify-center bg-gray-100 px-4 pt-24">
    {{-- Konfirmasi berhasil --}}
    {{-- @if (session('success'))
      <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" x-data="{ open: true }" x-show="open">
        <div class="w-full max-w-sm rounded-xl bg-white p-6 shadow-lg">
          <h3 class="mb-2 text-lg font-semibold text-green-600">
            Pengaduan Terkirim
          </h3>

          <p class="mb-4 text-gray-700">
            {{ session('success') }}
          </p>

          <div class="flex justify-end gap-2">
            <button @click="open = false" class="rounded-lg border px-4 py-2 text-sm">
              Tutup
            </button>

            <a class="rounded-lg bg-orange-500 px-4 py-2 text-sm font-semibold text-white"
              href="{{ route('pengaduan.create') }}">
              Buat Lagi
            </a>
          </div>
        </div>
      </div>
    @endif --}}

    <form action="{{ route('pengaduan.store') }}" class="w-full max-w-md space-y-4 rounded-xl bg-white p-6 shadow"
      method="POST">
      @csrf

      <h2 class="text-center text-xl font-bold text-orange-500">
        📝 Form Pengaduan
      </h2>

      {{-- Judul --}}
      <div>
        <label class="mb-1 block text-sm font-medium">
          Judul Pengaduan
        </label>
        <input class="w-full rounded-lg border px-3 py-2 focus:border-orange-400 focus:ring-orange-400" name="judul"
          placeholder="Masukkan judul pengaduan" required type="text" value="{{ old('judul') }}">
        @error('judul')
          <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
      </div>

      {{-- Deskripsi --}}
      <div>
        <label class="mb-1 block text-sm font-medium">
          Deskripsi
        </label>
        <textarea class="w-full rounded-lg border px-3 py-2 focus:border-orange-400 focus:ring-orange-400" name="deskripsi"
          placeholder="Jelaskan pengaduan Anda secara detail" required rows="4">{{ old('deskripsi') }}</textarea>
        @error('deskripsi')
          <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
      </div>

      {{-- Kategori --}}
      <div>
        <label class="mb-1 block text-sm font-medium">
          Kategori
        </label>
        <select class="w-full rounded-lg border px-3 py-2 focus:border-orange-400 focus:ring-orange-400"
          name="kategori">
          <option value="">Pilih Kategori</option>
          <option {{ old('kategori') === 'teknis' ? 'selected' : '' }} value="teknis">Teknis</option>
          <option {{ old('kategori') === 'administrasi' ? 'selected' : '' }} value="administrasi">Administrasi</option>
          <option {{ old('kategori') === 'lainnya' ? 'selected' : '' }} value="lainnya">Lainnya</option>
        </select>
      </div>

      <button class="w-full rounded-lg bg-orange-500 py-2 font-semibold text-white transition hover:bg-orange-600"
        type="submit">
        Kirim Pengaduan
      </button>
    </form>

    <div class="mt-4 flex w-full max-w-md justify-between">
      <a class="text-sm font-medium text-gray-600 hover:text-orange-500" href="{{ route('pengaduan.index') }}">
        ← Pengaduan Saya
      </a>
    </div>
  </div>
</x-app-layout>
