<?php

namespace Database\Seeders;

use App\Models\LibraryCard;
use App\Models\User;
use Illuminate\Database\Seeder;

class LibraryCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user dengan role 'user'
        $users = User::where('role', 'user')->get();

        foreach ($users as $index => $user) {
            LibraryCard::create([
                'user_id' => $user->id,
                'card_number' => 'LC' . str_pad($index + 1, 4, '0', STR_PAD_LEFT), // LC0001, LC0002, dst.
                'status' => 'active',
                'issue_date' => now(),
                'expiry_date' => now()->addYears(1),
            ]);
        }
    }
}
