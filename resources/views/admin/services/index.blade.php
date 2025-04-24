@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-screen-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Layanan</h1>

    <div class="my-4">
        <a href="{{ route('admin.services.create') }}" class="inline-block px-4 py-2 text-white bg-amber-600 rounded hover:bg-amber-700 transition duration-150">
            Tambah Layanan Baru
        </a>
    </div>

    <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-md">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">No</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Gambar</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Nama Layanan</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Harga</th> <!-- Kolom Harga -->
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $index => $service)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            @if ($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" alt="Gambar {{ $service->name }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-400 italic">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $service->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $service->description }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Rp {{ number_format($service->price, 0, ',', '.') }}</td> <!-- Kolom Harga -->
                        <td class="px-6 py-4 text-sm text-gray-600 whitespace-nowrap">
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus layanan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
