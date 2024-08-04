<?php

use Database\Seeders\ArticleSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
