<x-app-layout>
  <div class="mx-auto max-w-3xl space-y-6 px-4 pt-24">
    <div class="mb-4 flex items-center justify-between">
      <a class="text-sm font-medium text-gray-600 hover:text-orange-500" href="{{ route('pengaduan.index') }}">
        ← Pengaduan Saya
      </a>

      <a class="rounded-lg bg-orange-500 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-600"
        href="{{ route('pengaduan.create') }}">
        + Pengaduan Baru
      </a>
    </div>


    @if (session('success'))
      <div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-4 text-green-700">
        ✅ {{ session('success') }}
      </div>
    @endif



    {{-- Detail Pengaduan --}}
    <div class="rounded-xl bg-white p-6 shadow">
      <h2 class="mb-2 text-xl font-bold text-orange-500">
        {{ $pengaduan->judul }}
      </h2>

      <div class="mb-4 text-sm text-gray-500">
        Kategori: {{ $pengaduan->kategori ?? '-' }} |
        Status:
        <span class="font-semibold">
          {{ ucfirst($pengaduan->status) }}
        </span>
      </div>

      <p class="text-gray-700">
        {{ $pengaduan->deskripsi }}
      </p>
    </div>

    {{-- Tanggapan Admin --}}
    <div class="rounded-xl bg-white p-6 shadow">
      <h3 class="mb-4 text-lg font-semibold">
        💬 Tanggapan Admin
      </h3>

      @forelse ($pengaduan->tanggapans as $tanggapan)
        <div class="mb-4 border-l-4 border-orange-400 pl-4">
          <div class="mb-1 text-sm text-gray-600">
            Oleh <strong>{{ $tanggapan->admin->name }}</strong>
            • {{ $tanggapan->created_at->diffForHumans() }}
          </div>

          <p class="text-gray-800">
            {{ $tanggapan->tanggapan }}
          </p>
        </div>
      @empty
        <p class="italic text-gray-500">
          Belum ada tanggapan dari admin.
        </p>
      @endforelse
    </div>

  </div>
</x-app-layout>
