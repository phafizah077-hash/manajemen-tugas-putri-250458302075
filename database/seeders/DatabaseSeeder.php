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
        // User::factory(10)->create();

        User::create([
            'nama' => 'Putra Programmer',
            'email' => 'admin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Hafiz',
            'email' => 'hafiz@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('234234234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Al',
            'email' => 'al@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('345345345'),
            'is_tugas' => false,
        ]);

         User::create([
            'nama' => 'Budi',
            'email' => 'budi@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('345345345'),
            'is_tugas' => false,
        ]);
    }
}
