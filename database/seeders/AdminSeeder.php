<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah email sudah ada agar tidak duplicate
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'), // Password bisa diganti sesuai keinginan
            ],
            [
                'name' => 'admin',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($admins as $admin) {
            Admin::firstOrCreate(
                ['email' => $admin['email']], // Cek berdasarkan email
                $admin // Jika tidak ada, buat data baru
            );
        }
    }
}
