<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Blog;
use Database\Factories\BlogFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            QuestionSeeder::class,
        ]);

        \App\Models\Patient::factory(10)->create();
         \App\Models\Doctor::factory(10)->create();
         Blog::factory(10)->create();
         Article::factory(10)->create();

    }
}
