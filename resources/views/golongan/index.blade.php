<x-layout>
    <x-slot:title>Data Kategori</x-slot:title>

    <!-- Tombol Tambah Kategori -->
    <a href="{{ route('golongan.create') }}" 
        class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold px-3 py-1.5 rounded-md mb-4 shadow-md">
        Tambah Kategori
    </a>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="mb-4 text-pink-700 bg-pink-100 px-3 py-2 rounded-md border border-pink-300 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Data Golongan -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg w-3/4 mx-auto">
        <table class="min-w-full table-auto w-full text-sm">
            <!-- Header Tabel -->
            <thead class="bg-pink-500 text-white">
                <tr>
                    <th class="px-2 py-2 text-left font-semibold border-b">ID</th>
                    <th class="px-2 py-2 text-left font-semibold border-b">Kode</th>
                    <th class="px-2 py-2 text-left font-semibold border-b">Nama</th>
                    <th class="px-2 py-2 text-left font-semibold border-b">Aksi</th>
                </tr>
            </thead>

            <!-- Body Tabel -->
            <tbody class="text-gray-700 bg-white">
                @forelse($golongan as $item)
                    <tr class="hover:bg-pink-50 transition">
                        <td class="px-2 py-2 border-b">{{ $item->gol_id }}</td>
                        <td class="px-2 py-2 border-b">{{ $item->gol_kode }}</td>
                        <td class="px-2 py-2 border-b">{{ $item->gol_nama }}</td>
                        <td class="px-2 py-2 border-b flex gap-1">
                            <!-- Tombol Edit -->
                            <a href="{{ route('golongan.edit', $item->gol_id) }}"
                                class="text-pink-500 hover:text-pink-700">Edit</a>
                            |
                            <!-- Delete Form -->
                            <form action="{{ route('golongan.destroy', $item->gol_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center px-2 py-2 text-gray-500">Data Golongan tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
