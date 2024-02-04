<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "mohamed",
            "email"=> "mohamed-admin@gmail.com",
            "password"=> Hash::make('mohamed@admin-189'),
            'role'=> 'admin',
        ]);
        User::create([
            "name"=> "sameh",
            "email"=> "sameh-admin@gmail.com",
            "password"=> Hash::make('sameh@admin-120'),
            'role'=> 'admin',
        ]);
    }
}
