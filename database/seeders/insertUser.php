<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class insertUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama_lengkap' => 'Admin',
                'email' => '',
                'password' => Hash::make(''),
                'phone' => '',
                'address' => '',
                'user_type' => '',
                'identity_number' => '',
                'institution' => '',
                'library_card_number' => '',
            ],
        ]);
    }
}
