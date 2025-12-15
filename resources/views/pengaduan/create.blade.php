<x-app-layout>
    <div class="min-h-screen pt-24 flex items-center justify-center bg-gray-100 px-4">
        @auth
        <form action="{{ route('pengaduan.store') }}" method="POST"
              class="bg-white w-full max-w-md rounded-xl shadow p-6 space-y-4">
            @csrf
    
            <h2 class="text-xl font-bold text-center text-orange-500">
                📝 Form Pengaduan
            </h2>
    
            <div>
                <label class="block text-sm font-medium mb-1">
                    Pengaduan
                </label>
                <input type="text" name="judul"
                       class="w-full border rounded-lg px-3 py-2 focus:ring-orange-400 focus:border-orange-400"
                       required>
            </div>
    
            <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold">
                Kirim Pengaduan
            </button>
       
        @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
        @endauth
    </form>
 
    </div>
    </x-app-layout>
    