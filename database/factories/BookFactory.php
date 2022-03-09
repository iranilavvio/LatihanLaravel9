<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // $user = User::isUser()->inRandomOrder()->first();
        return [
            'slug' => $this->faker->slug,
            'name' => $this->faker->sentence,
            'qty' => $this->faker->randomDigit,
            'image' => $this->faker->imageUrl,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
