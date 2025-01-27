<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = Category::all()->pluck('id');

        return [
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'category_id' => fake()->randomElement($categoryIds),
        ];
    }
}
