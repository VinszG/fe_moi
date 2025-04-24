@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-8 py-6 max-w-3xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Produk</h1>

        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Produk</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" value="{{ old('name', $product->name) }}" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-1">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div>
                <label for="price" class="block text-sm font-semibold text-gray-700 mb-1">Harga</label>
                <input type="number" id="price" name="price" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" value="{{ old('price', $product->price) }}" required>
            </div>

            <div>
                <label for="image" class="block text-sm font-semibold text-gray-700 mb-1">Gambar</label>
                <input type="file" id="image" name="image" class="w-full">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="mt-3 w-32 rounded-md border border-gray-200">
                @endif
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md font-medium transition">Update</button>
            </div>
        </form>
    </div>
@endsection
