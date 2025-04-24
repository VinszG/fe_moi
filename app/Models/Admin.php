<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (optional)
    // protected $table = 'admins';  // Gunakan jika nama tabel berbeda dari nama model (admin)

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['name', 'email', 'password'];

    // Nonaktifkan penggunaan timestamps
    public $timestamps = false;
}
