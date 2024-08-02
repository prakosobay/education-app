<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comment_artikels')->truncate();
        DB::table('comment_artikels')->insert([
            [
                'artikel_id' => 1,
                'created_by' => 3,
                'content' => 'You punya artikel ga bagus ha',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'artikel_id' => 2,
                'created_by' => 1,
                'content' => 'Sangat menginspirasi',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
