<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345'),
                'role_id' => 1
            ],
            [
                'name' => 'Ucup',
                'email' => 'ucup@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2
            ],
            [
                'name' => 'yau',
                'email' => 'yau@mail.com',
                'password' => Hash::make('87654321'),
                'role_id' => 2
            ],
            [
                'name' => 'bay',
                'email' => 'bay@mail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 2
            ]
        ]);

        DB::table('roles')->truncate();
        DB::table('roles')->insert([
            [
                'name' => 'Administrator',
            ],
            [
                'name' => 'User',
            ]
        ]);
    }
}
