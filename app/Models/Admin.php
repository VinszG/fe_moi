<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Jika nama tabel berbeda dari default "admins", baru didefinisikan
    // protected $table = 'admin'; // Sesuaikan jika pakai tabel 'admin'

    protected $fillable = ['name', 'email', 'password'];

    // Nonaktifkan timestamps kalau memang tidak digunakan
    public $timestamps = false;
}
