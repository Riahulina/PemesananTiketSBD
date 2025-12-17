<x-app-layout>
  <div class="mx-auto max-w-4xl px-4 pt-24">

    <div class="mb-6 flex items-center justify-between">

      <div class="w-full max-w-lg">
        <h2 class="text-xl font-bold">
          📂 Pengaduan Saya
        </h2>
        <p class="text-sm text-gray-500">
          Daftar pengaduan yang pernah Anda kirim.
        </p>
      </div>
      <a class="rounded-lg bg-orange-500 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-600"
        href="{{ route('pengaduan.create') }}">
        + Buat Pengaduan
      </a>



    </div>

    @if ($pengaduans->isEmpty())
      <div class="rounded-lg bg-gray-50 p-6 text-center text-gray-500">
        Anda belum memiliki pengaduan.
      </div>
    @else
      <div class="space-y-4">
        @foreach ($pengaduans as $pengaduan)
          <div class="flex items-center justify-between rounded-xl bg-white p-5 shadow">
            <div>
              <h3 class="font-semibold text-gray-800">
                {{ $pengaduan->judul }}
              </h3>

              <div class="text-sm text-gray-500">
                {{ $pengaduan->created_at->format('d M Y') }}
                • Kategori: {{ $pengaduan->kategori ?? '-' }}
              </div>
            </div>

            <div class="flex items-center gap-4">
              {{-- Status --}}
              <span
                class="@if ($pengaduan->status === 'diproses') bg-yellow-100 text-yellow-700
                  @elseif ($pengaduan->status === 'ditanggapi') bg-blue-100 text-blue-700
                  @else bg-green-100 text-green-700 @endif rounded-full px-3 py-1 text-xs font-semibold">
                {{ ucfirst($pengaduan->status) }}
              </span>

              {{-- Detail --}}
              <a class="text-sm font-medium text-orange-500 hover:underline"
                href="{{ route('pengaduan.show', $pengaduan) }}">
                Lihat
              </a>
            </div>
          </div>
        @endforeach
      </div>
    @endif

  </div>
</x-app-layout>
