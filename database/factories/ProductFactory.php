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
        $images = ['product/01.jpg', 'product/02.jpg', 'product/03.jpg'];
        return [
            // 'image' => $images[rand(0, 2)],
            'image' => 'https://picsum.photos/1920/1080',
            'name' => fake()->word(),
            'sku' => rand(100, 300),
            'price' => rand(100, 1000),
            'quantity' => rand(50, 100)
        ];
    }
}
