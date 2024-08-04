<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Lorem ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'This is a sample article content.',
            'is_apprv' => true,
            'apprv_by' => 1, // Pastikan user dengan ID 1 ada
            'user_id' => 1, // Pastikan user dengan ID 1 ada
            'tag_id' => 1,  // Pastikan tag dengan ID 1 ada
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Tambahkan artikel lain jika diperlukan
    }
}
