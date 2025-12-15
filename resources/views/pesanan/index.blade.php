<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h2 class="text-2xl font-bold mb-6">Pesanan Saya</h2>

        @forelse ($pesanan as $item)
            <div class="bg-white rounded-xl shadow p-5 mb-4 flex justify-between items-center">
                <div>
                    <p class="font-semibold">
                        {{ $item->kereta->nama_kereta ?? 'Kereta' }}
                    </p>
                    <p class="text-sm text-gray-500">
                        {{ \Carbon\Carbon::parse($item->jadwal)->format('d M Y H:i') }}
                    </p>
                    <p class="text-sm">
                        Status: 
                        <span class="text-green-600 font-semibold">
                            {{ $item->status_pembayaran }}
                        </span>
                    </p>
                </div>

                <a href="{{ route('pesanan.struk', $item->tiket->kode_tiket) }}"
                   class="text-orange-500 font-semibold hover:underline">
                    Lihat Struk
                </a>
            </div>
        @empty
            <p class="text-gray-500">Belum ada pesanan tiket.</p>
        @endforelse
    </div>
</x-app-layout>
