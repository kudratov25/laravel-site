<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'rate_id'=>rand(1,5),
            'product_id'=>rand(1, 10),
            'content'=>fake()->sentences($nb = 3, $asText =true),
        ];
    }
}
