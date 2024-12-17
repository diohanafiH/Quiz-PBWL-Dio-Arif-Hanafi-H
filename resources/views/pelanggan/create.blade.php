<x-layout>
    <x-slot:title>Tambah Pelanggan</x-slot:title>

    <div class="p-6">
        <form action="{{ route('pelanggan.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama Pelanggan -->
            <div>
                <label for="pel_nama" class="block text-sm font-medium text-white mb-2">Nama Pelanggan</label>
                <input type="text" id="pel_nama" name="pel_nama" value="{{ old('pel_nama') }}"
                    class="block w-1/2 border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-pink-500 focus:border-pink-500"
                    placeholder="Masukkan Nama Pelanggan" required>
            </div>

            <!-- Alamat -->
            <div>
                <label for="pel_alamat" class="block text-sm font-medium text-white mb-2">Alamat</label>
                <textarea id="pel_alamat" name="pel_alamat"
                    class="block w-1/2 border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-pink-500 focus:border-pink-500"
                    placeholder="Masukkan Alamat Pelanggan" required>{{ old('pel_alamat') }}</textarea>
            </div>

            <!-- Golongan -->
            <div>
                <label for="pel_id_gol" class="block text-sm font-medium text-white mb-2">Golongan</label>
                <select id="pel_id_gol" name="pel_id_gol"
                    class="block w-1/2 border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-pink-500 focus:border-pink-500"
                    required>
                    <option value="">Pilih Golongan</option>
                    @foreach($golongan as $gol)
                        <option value="{{ $gol->gol_id }}" {{ old('pel_id_gol') == $gol->gol_id ? 'selected' : '' }}>
                            {{ $gol->gol_nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center space-x-4">
                <!-- Tombol Simpan -->
                <button type="submit"
                    class="bg-pink-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-pink-600 transition duration-200">
                    Simpan
                </button>

                <!-- Tombol Batal -->
                <a href="{{ route('pelanggan.index') }}"
                    class=" text-white px-6 py-2 transition duration-200">
                    Batal
                </a>

                <!-- Tombol Tambah Golongan -->
                <a href="{{ route('golongan.create') }}"
                    class="bg-green-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-green-600 transition duration-200">
                    Tambah Golongan
                </a>
            </div>
        </form>
    </div>
</x-layout>
