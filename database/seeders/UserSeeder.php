<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama_lengkap' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'phone' => '081234567891',
                'address' => 'Jl. Melati No. 10, Bandung',
                'identity_number' => 'USR001',
                'institution' => 'Universitas Indonesia',
                'email_verified_at' => now(),
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'email' => 'siti.aminah@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'phone' => '082345678902',
                'address' => 'Jl. Mawar No. 5, Jakarta',
                'identity_number' => 'USR002',
                'institution' => 'SMA Negeri 1 Jakarta',
                'email_verified_at' => now(),
            ],
            [
                'nama_lengkap' => 'Ahmad Yani',
                'email' => 'ahmad.yani@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'phone' => '083456789013',
                'address' => 'Jl. Kenanga No. 15, Surabaya',
                'identity_number' => 'USR003',
                'institution' => 'Institut Teknologi Surabaya',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
