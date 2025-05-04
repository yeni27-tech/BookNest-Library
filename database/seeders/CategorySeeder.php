<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Fiksi'],
            ['name' => 'Non-Fiksi'],
            ['name' => 'Sains'],
            ['name' => 'Sejarah'],
            ['name' => 'Pendidikan'],
            ['name' => 'Biografi'],
            ['name' => 'classic'],
            ['name' => 'dystopian'],
            ['name' => 'fantasy'],
            ['name' => 'horror'],
            ['name' => 'fiction'],
            ['name' => 'romance'],
            ['name' => 'none-fiction'],
            ['name' => 'pholosophy'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
