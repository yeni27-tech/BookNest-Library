<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Admin BookNest',
            'email' => 'admin@booknest.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Perpustakaan No. 1, Jakarta',
            'identity_number' => 'ADM001',
            'institution' => 'BookNest Library',
            'email_verified_at' => now(),
        ]);

        User::create([
            'nama_lengkap' => 'Super Admin',
            'email' => 'superadmin@booknest.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'phone' => '082345678901',
            'address' => 'Jl. Perpustakaan No. 2, Jakarta',
            'identity_number' => 'ADM002',
            'institution' => 'BookNest Library',
            'email_verified_at' => now(),
        ]);
    }
}
