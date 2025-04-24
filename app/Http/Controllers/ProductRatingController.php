<?php

namespace App\Http\Controllers;

use App\Models\ProductRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log; // Pastikan Log diimport
use Illuminate\Routing\Controller;

class ProductRatingController extends Controller
{
    public function __construct()
    {
        // Pastikan middleware ini digunakan untuk admin
        $this->middleware('auth:admin');  // Gunakan middleware yang sesuai
    }

    // Fungsi untuk menyimpan rating dan komentar
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable|string',
            'name' => 'required|string|max:255',
        ]);

        // Menyimpan rating baru
        $rating = ProductRating::create([
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'message' => $request->message,
            'name' => $request->name,
        ]);

        // Log untuk mencatat informasi pengiriman rating
        Log::info('Rating produk baru diterima', [
            'product_id' => $request->product_id,
            'rating_id' => $rating->id,
            'user_name' => $request->name,
            'rating_value' => $request->rating,
        ]);

        return redirect()->route('home')->with('success', 'Terima kasih atas rating dan komentarnya!');
    }

    // Fungsi untuk menghapus rating dan komentar
    public function destroy($id)
    {
        // Debug: cek apakah sesi admin ada
        if (!Session::has('admin')) {
            return redirect()->back()->with('error', 'Anda harus login sebagai admin terlebih dahulu.');
        }

        // Mengambil rating berdasarkan ID
        $comment = ProductRating::findOrFail($id);

        // Log sebelum menghapus rating
        Log::info('Menghapus rating produk', [
            'rating_id' => $comment->id,
            'product_id' => $comment->product_id,
            'user_name' => $comment->name,
        ]);

        // Menghapus rating
        $comment->delete();

        // Log setelah penghapusan
        Log::info('Rating produk berhasil dihapus', [
            'rating_id' => $comment->id,
            'product_id' => $comment->product_id,
            'user_name' => $comment->name,
        ]);

        return redirect()->back()->with('message', 'Komentar berhasil dihapus!');
    }
}
