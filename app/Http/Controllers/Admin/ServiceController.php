<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Tampilkan semua services di halaman admin
    $services = Service::all();
    return view('admin.services.index', compact('services'));
}

public function home()
{
    // Ambil semua service untuk ditampilkan di homepage
    $services = Service::all();
    return view('home', compact('services'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Log::info('Mulai simpan layanan', $request->all());

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('services', 'public');
        $validated['image'] = $path;

        Log::info('Gambar berhasil diupload', ['path' => $path]);
    } else {
        Log::info('Tidak ada gambar yang diupload');
    }

    $service = Service::create($validated);
    Log::info('Layanan berhasil dibuat', ['id' => $service->id]);

    return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan detail layanan
        $service = Service::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan halaman untuk mengedit layanan
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Menghapus "Rp" dan titik dari harga sebelum disimpan ke database
        $price = str_replace(['Rp ', '.'], '', $request->price);
    
        // Temukan service berdasarkan ID
        $service = Service::findOrFail($id);
    
        // Jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage jika ada
            if ($service->image && \Storage::exists('public/' . $service->image)) {
                \Storage::delete('public/' . $service->image);
            }
    
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = $imagePath;  // Update gambar baru di array validated
        }
    
        // Update data layanan dengan data yang sudah tervalidasi
        $validated['price'] = $price; // Menyimpan harga yang sudah diformat
        $service->update($validated);
    
        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil diperbarui');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus layanan
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Layanan berhasil dihapus');
    }
}
