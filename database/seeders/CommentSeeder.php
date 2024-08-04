<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('comments')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('comments')->insert([
            [
                'content' => 'This is a sample comment.',
                'user_id' => 1, // Pastikan user dengan ID 1 ada
                'article_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'content' => 'Another sample comment.',
                'user_id' => 2, // Pastikan user dengan ID 2 ada
                'article_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Tambahkan komentar lain jika diperlukan
        ]);
    }
}
