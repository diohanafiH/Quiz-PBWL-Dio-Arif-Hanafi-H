<x-layout>
    <x-slot:title>Edit Pelanggan</x-slot:title>

    <div class="p-6">
        <h1 class="text-2xl font-bold text-white mb-4">Edit Pelanggan</h1>

        <form action="{{ route('pelanggan.update', $pelanggan->pel_id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama Pelanggan -->
            <div class="w-1/2">
                <label for="pel_nama" class="block text-sm font-medium  text-white mb-1">Nama</label>
                <input type="text" id="pel_nama" name="pel_nama" value="{{ old('pel_nama', $pelanggan->pel_nama) }}"
                    class="block w-full border border-gray-300 rounded-md px-3 py-1.5 shadow focus:ring-pink-500 focus:border-pink-500 text-sm" 
                    placeholder="Nama Pelanggan" required>
            </div>

            <!-- Alamat -->
            <div class="w-1/2">
                <label for="pel_alamat" class="block text-sm font-medium  text-white mb-1">Alamat</label>
                <textarea id="pel_alamat" name="pel_alamat" 
                    class="block w-full border border-gray-300 rounded-md px-3 py-1.5 shadow focus:ring-pink-500 focus:border-pink-500 text-sm" 
                    placeholder="Alamat" required>{{ old('pel_alamat', $pelanggan->pel_alamat) }}</textarea>
            </div>

            <!-- Golongan -->
            <div class="w-1/2">
                <label for="pel_id_gol" class="block text-sm font-medium  text-white mb-1">Golongan</label>
                <select id="pel_id_gol" name="pel_id_gol" 
                    class="block w-full border border-gray-300 rounded-md px-3 py-1.5 shadow focus:ring-pink-500 focus:border-pink-500 text-sm" 
                    required>
                    <option value="">Pilih Golongan</option>
                    @foreach ($golongan as $gol)
                        <option value="{{ $gol->gol_id }}" 
                            {{ old('pel_id_gol', $pelanggan->pel_id_gol) == $gol->gol_id ? 'selected' : '' }}>
                            {{ $gol->gol_nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center space-x-3">
                <button type="submit" 
                    class="bg-pink-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm">
                    Simpan
                </button>
                <a href="{{ route('pelanggan.index') }}" 
                    class="bg-gray-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 text-sm">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-layout>
