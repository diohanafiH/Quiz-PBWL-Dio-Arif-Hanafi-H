<x-layout>
    <x-slot:title>Edit Kategori</x-slot:title>

    <h1 class="text-2xl font-bold mb-4 text-white">Edit Kategori</h1>

   
    <form action="{{ route('golongan.update', $golongan->gol_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="gol_kode" class="block text-sm font-medium text-white">Kode Kategori</label>
            <input type="text" name="gol_kode" id="gol_kode" 
                class="mt-1 block w-1/2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm" 
                value="{{ old('gol_kode', $golongan->gol_kode) }}" required>
            @error('gol_kode')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="gol_nama" class="block text-sm font-medium text-white">Nama Kategori</label>
            <input type="text" name="gol_nama" id="gol_nama" 
                class="mt-1 block w-1/2 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm" 
                value="{{ old('gol_nama', $golongan->gol_nama) }}" required>
            @error('gol_nama')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-pink-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-pink-600">Simpan Perubahan</button>
            <a href="{{ route('golongan.index') }}" class="ml-4 text-white">Batal</a>
        </div>
    </form>
</x-layout>
