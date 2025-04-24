@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-8 pl-64">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Produk</h1>
            <a href="{{ route('admin.products.create') }}" class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Tambah Produk
            </a>
        </div>

        <!-- Tabel Produk -->
        <div class="w-full bg-white shadow rounded-lg overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-200 text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">No</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Nama Produk</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Harga</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Foto</th>
                        <th class="px-6 py-3 text-left text-gray-700 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-6 py-3 text-gray-800">{{ $index + 1 }}</td>
                            <td class="px-6 py-3 text-gray-800">{{ $product->name }}</td>
                            <td class="px-6 py-3 text-gray-800">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="px-6 py-3">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Foto Produk" class="w-16 h-16 object-cover rounded">
                                @else
                                    <span class="text-gray-500 italic">Belum ada gambar</span>
                                @endif
                            </td>
                            <td class="px-6 py-3">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada produk tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
