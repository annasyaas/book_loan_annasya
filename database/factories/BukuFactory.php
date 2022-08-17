<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'slug'  => $this->faker->slug(),
            'desc'  => $this->faker->paragraph(),
            'user_id'   => mt_rand(1,3),
            'category_id'   => mt_rand(1,3)
        ];
    }
}
