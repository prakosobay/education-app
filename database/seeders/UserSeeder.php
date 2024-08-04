<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan pemeriksaan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel
        DB::table('users')->truncate();
        DB::table('roles')->truncate();

        // Insert data ke tabel roles
        DB::table('roles')->insert([
            [
                'name' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Insert data ke tabel users
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ucup',
                'email' => 'ucup@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'yau',
                'email' => 'yau@mail.com',
                'password' => Hash::make('87654321'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'bay',
                'email' => 'bay@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'anam',
                'email' => 'anam@mail.com',
                'password' => Hash::make('asdf'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Aktifkan kembali pemeriksaan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
