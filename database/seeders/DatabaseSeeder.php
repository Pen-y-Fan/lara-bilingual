<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\NewsItem;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        if (User::doesntExist()) {
            User::factory()
                ->create([
                    'name' => 'Admin',
                    'email' => 'admin@example.com',
                ]);
        }
        for ($i=0; $i < 10; $i++) {
            Post::create([
                'title' => [
                    'en' => fake()->realText(10),
                    'cy' => fake()->text(10),
                ],
                'body' => [
                    'en' => fake()->realText(250),
                    'cy' => fake()->text(250),
                ],
            ]);
            NewsItem::create([
                'name' => [
                    'en' => fake()->realText(15),
                    'cy' => fake()->text(15),
                ],
            ]);
        }
    }
}
