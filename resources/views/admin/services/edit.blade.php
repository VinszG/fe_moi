@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-screen-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Layanan</h1>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="my-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Nama Layanan</label>
            <input type="text" name="name" id="name" value="{{ $service->name }}" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required>
        </div>

        <div class="my-4">
            <label for="description" class="block text-sm font-medium text-gray-600">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required>{{ $service->description }}</textarea>
        </div>

        <div class="my-4">
            <label for="price" class="block text-sm font-medium text-gray-600">Harga</label>
            <input type="text" name="price" id="price" value="{{ number_format($service->price, 0, ',', '.') }}" class="w-full border border-gray-300 rounded-lg p-3 mt-2" required oninput="formatPrice(this)">
        </div>

        <div class="my-4">
            <label for="image" class="block text-sm font-medium text-gray-600">Gambar</label>
            <input type="file" name="image" id="image" class="w-full mt-2 border border-gray-300 rounded-lg p-2">
            @if ($service->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $service->image) }}" class="w-32 h-32 object-cover rounded" alt="Gambar saat ini">
                </div>
            @endif
        </div>

        <div class="my-4">
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>

<script>
    // Fungsi untuk memformat harga (diinput)
    function formatPrice(input) {
        let value = input.value.replace(/\D/g, ''); // Menghapus karakter non-numeric
        value = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'); // Menambahkan titik setiap 3 angka
        input.value = value; // Menetapkan kembali nilai input dengan format baru
    }

    // Fungsi untuk membersihkan titik sebelum mengirim data
    function cleanPrice(input) {
        // Menghapus titik pemisah ribuan dan mengirimkan angka murni
        input.value = input.value.replace(/\./g, '');
    }

    // Menambahkan event sebelum form submit
    document.querySelector('form').addEventListener('submit', function() {
        let priceInput = document.querySelector('#price');
        cleanPrice(priceInput); // Bersihkan harga sebelum form dikirim
    });
</script>

@endsection
