<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'publisher' => 'Bentang Pustaka',
                'year' => 2005,
                'category_id' => 1, // Fiksi
                'sinopsis' => 'Kisah inspiratif tentang pendidikan di Belitong.',
                'stok' => 5,
                'status' => 'available',
                'image' => '/images/laskar-pelangi.jpg',
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'publisher' => 'Kompas',
                'year' => 2018,
                'category_id' => 2, // Non-Fiksi
                'sinopsis' => 'Pengantar praktis tentang Stoisisme.',
                'stok' => 3,
                'status' => 'available',
                'image' => '/images/filosofi-teras.jpg',
            ],
            [
                'title' => 'Sejarah Dunia',
                'author' => 'Ernst Gombrich',
                'publisher' => 'Gramedia',
                'year' => 2008,
                'category_id' => 4, // Sejarah
                'sinopsis' => 'Sejarah dunia dalam narasi yang menarik.',
                'stok' => 4,
                'status' => 'available',
                'image' => '/images/sejarah-dunia.jpg',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
