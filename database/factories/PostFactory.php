<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**Psy Shell v0.10.12 (PHP 7.3.21 — cli) by Justin Hileman
            >>> App\Models\Post::factory()->times(200)->create(['user_id'=>1]); */
        return [
            'body'=>$this->faker->sentence(14),
        ];
    }
}
