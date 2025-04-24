<?php

// app/Http/Controllers/AdminController.php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\ProductRating;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan daftar rating produk
    public function index()
    {
        $comments = ProductRating::with('user')->get();
        return view('admin.ratings.index', compact('comments'));
    }

    // Fungsi untuk verifikasi rating produk
    public function verify(ProductRating $rating)
    {
        // Tandai rating sebagai diverifikasi
        $rating->verified = true;
        $rating->save();

        return redirect()->back()->with('success', 'Komentar telah diverifikasi!');
    }
}
