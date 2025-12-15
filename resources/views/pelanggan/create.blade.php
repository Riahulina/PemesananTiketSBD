<x-app-layout>
    <section class="pt-32 pb-20 px-4 max-w-xl mx-auto">

        <h1 class="text-2xl font-bold text-center mb-6">
            Data Pemesan Tiket
        </h1>

        <!-- Info Kereta -->
        <div class="mb-5 bg-gray-100 p-4 rounded-xl text-sm text-gray-700">
            <p class="font-semibold mb-1">Kereta Dipilih:</p>
            <p>
                {{ $kereta->nama }} <br>
                {{ $kereta->asal }} → {{ $kereta->tujuan }} <br>
                {{ \Carbon\Carbon::parse($kereta->tanggal_berangkat)->format('d M Y') }},
                {{ $kereta->jam_berangkat }}
            </p>
        </div>

        <form method="POST" action="{{ route('beli-tiket.store') }}"
        class="bg-white p-6 rounded-2xl shadow-xl space-y-4">
      @csrf
  
      <input type="hidden" name="kereta_id" value="{{ $kereta->id }}">
  
      <input type="email" name="email" placeholder="Email"
          class="w-full border p-3 rounded-xl" required>
  
      <input type="text" name="nama_pelanggan" placeholder="Nama Lengkap"
          class="w-full border p-3 rounded-xl" required>
  
      <input type="text" name="nohp_pelanggan" placeholder="No. HP"
          class="w-full border p-3 rounded-xl" required>
  
      <textarea name="alamat" placeholder="Alamat Lengkap"
          class="w-full border p-3 rounded-xl" rows="3" required></textarea>
  
      <select name="metode_pembayaran"
          class="w-full border p-3 rounded-xl" required>
          <option value="">Pilih Metode Pembayaran</option>
          <option value="Transfer Bank">Transfer Bank</option>
          <option value="E-Wallet">E-Wallet</option>
          <option value="QRIS">QRIS</option>
      </select>
  
      <button type="submit"
          class="w-full bg-orange-500 text-white py-3 rounded-xl font-bold">
          Lanjutkan Pemesanan
      </button>
  </form>
  
  
    </section>
</x-app-layout>
