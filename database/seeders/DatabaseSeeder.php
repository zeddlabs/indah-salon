<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Karyawan;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Jabatan::create([
            'nama_jabatan' => 'Owner',
            'gaji' => 10000000,
        ]);

        Karyawan::create([
            'id_jabatan' => 1,
            'nama' => 'Admin',
            'alamat' => 'Jl. Jalan',
            'no_telp' => '08123456789',
            'jenis_kelamin' => 'Perempuan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
