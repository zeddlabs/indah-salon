<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'alamat' => 'Jl. Admin',
            'no_telp' => '081234567890',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
    }
}
