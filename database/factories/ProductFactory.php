<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 4),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(),
            'stock' => $this->faker->numberBetween(1, 10),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
