<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Category::factory()->create([
        //     'name' => 'News',
        // ]);     
        
        // Category::factory()->create([
        //     'name' => 'Fashion',
        // ]);        


        // Category::factory()->create([
        //     'name' => 'World',
        // ]);        


        // Category::factory()->create([
        //     'name' => 'Sport',
        // ]);        

        Blog::factory(10)->create();


    }
}
