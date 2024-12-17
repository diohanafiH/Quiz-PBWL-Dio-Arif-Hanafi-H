<x-layout>
    <x-slot:title>Data Golongan</x-slot:title>

    <div class="p-6">
        <!-- Judul Halaman -->
        <h1 class="text-3xl font-bold mb-6 text-gray-900">Data Kategori</h1>

        <!-- Tombol Tambah -->
        <div class="mb-4">
            <a href="{{ route('golongan.create') }}"
                class="bg-[#F06292] hover:bg-[#D84D8B] text-white font-bold py-2 px-4 rounded">
                Tambah Kategori
            </a>
        </div>

        <!-- Tabel Data Golongan -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 shadow-md rounded-lg">
                <!-- Header Tabel -->
                <thead class="bg-[#F06292] text-white">
                    <tr>
                        <th class="border border-gray-200 px-4 py-2 text-left">No</th>
                        <th class="border border-gray-200 px-4 py-2 text-left">Kode Kategori</th>
                        <th class="border border-gray-200 px-4 py-2 text-left">Nama Kategori</th>
                        <th class="border border-gray-200 px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>

                <!-- Body Tabel -->
                <tbody class="text-gray-700">
                    @foreach ($golongan as $index => $gol)
                        <tr class="hover:bg-[#FEE2E2] transition">
                            <td class="border border-gray-200 px-4 py-2">{{ $index + 1 }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $gol->gol_kode }}</td>
                            <td class="border border-gray-200 px-4 py-2">{{ $gol->gol_nama }}</td>
                            <td class="border border-gray-200 px-4 py-2 text-center">
                                <!-- Tombol Aksi -->
                                <a href="{{ route('golongan.edit', $gol->gol_id) }}"
                                    class="text-[#F06292] hover:text-[#D84D8B] mr-2">
                                    Edit
                                </a>
                                <form action="{{ route('golongan.destroy', $gol->gol_id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                        class="text-red-500 hover:text-red-700">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pesan jika data kosong -->
        @if ($golongan->isEmpty())
            <div class="mt-4 text-center text-gray-500">
                <p>Tidak ada data kategori tersedia.</p>
            </div>
        @endif
    </div>
</x-layout>
