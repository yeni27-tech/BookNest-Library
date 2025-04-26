<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\LibraryCard;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $fiction = Category::create(['name' => 'Fiction']);
        $nonFiction = Category::create(['name' => 'Non-Fiction']);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year' => 2005,
            'category_id' => 5,
            'sinopsis' => 'Kisah inspiratif tentang pendidikan di Belitong.',
            'stok' => 5,
            'status' => 'available',
            'image' => '/images/laskar-pelangi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        $user = User::create([
            'nama_lengkap' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'phone' => '081234567890',
            'address' => 'Jl. Contoh No. 123',
            'role' => 'user',
            'user_type' => 'umum', // or 'pelajar' if needed
            'identity_number' => '1234567890',
            'institution' => 'Universitas Contoh',
        ]);

        LibraryCard::create([
            'user_id' => $user->id,
            'barcode' => 'LC123456',
            'issued_date' => now(),
            'status' => true,
        ]);
    }
}
