@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-screen-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Layanan Baru</h1>

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="my-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Nama Layanan</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required>
        </div>

        <div class="my-4">
            <label for="description" class="block text-sm font-medium text-gray-600">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required></textarea>
        </div>
        <div class="my-4">
            <label for="price" class="block text-sm font-medium text-gray-600">Harga</label>
            <input type="text" name="price" id="price" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required oninput="formatPrice(this)">
        </div>
        

        <div class="my-4">
            <label for="image" class="block text-sm font-medium text-gray-600">Gambar</label>
            <input type="file" name="image" id="image" class="w-full mt-2 border border-gray-300 rounded-lg p-2">
        </div>

        <div class="my-4">
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
        </div>
    </form>
</div>

<script>
    function formatPrice(input) {
        // Hapus semua karakter selain angka
        let value = input.value.replace(/\D/g, '');
        
        // Jika kosong, isi dengan 0
        if (value === '') {
            input.value = '0';
            return;
        }

        // Format ribuan
        input.value = parseInt(value).toLocaleString('id-ID');
    }

    // Bersihkan titik sebelum form dikirim
    document.querySelector('form').addEventListener('submit', function() {
        const input = document.getElementById('price');
        input.value = input.value.replace(/\./g, '');
    });

    // Saat pertama kali load, jika kosong isi dengan 0
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('price');
        if (!input.value) {
            input.value = '0';
        } else {
            formatPrice(input);
        }
    });
</script>


@endsection
