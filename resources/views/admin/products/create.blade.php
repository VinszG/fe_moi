@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-4 pl-64"> <!-- Menambahkan padding kiri agar tidak tertabrak sidebar -->
        <h1 class="text-xl font-semibold mb-4">Tambah Produk</h1>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="price" name="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm" 
                    value="{{ old('price', '0') }}" required oninput="formatPrice(this)">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full">
            </div>

            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Simpan</button>
        </form>
    </div>

    <script>
        function formatPrice(input) {
            // Ambil angka saja
            let value = input.value.replace(/\D/g, '');
    
            // Jika kosong, isi 0
            if (value === '') value = '0';
    
            // Format titik ribuan
            input.value = parseInt(value).toLocaleString('id-ID');
        }
    
        // Format saat halaman load
        document.addEventListener('DOMContentLoaded', () => {
            const priceInput = document.getElementById('price');
            formatPrice(priceInput);
        });
    
        // Bersihkan titik sebelum submit
        document.querySelector('form').addEventListener('submit', function () {
            const priceInput = document.getElementById('price');
            priceInput.value = priceInput.value.replace(/\./g, '');
        });
    </script>

@endsection