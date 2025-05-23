<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'image',
    ];

    // Relasi dengan rating produk
    public function ratings()
    {
        return $this->hasMany(ProductRating::class);
    }

    // Akses ke path gambar produk
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
