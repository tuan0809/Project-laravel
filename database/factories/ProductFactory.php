<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {   
        return [
            'name' => fake()->words(3, asText: true),
            'price' => fake()->numberBetween(10000, 100000),
            'image' => fake()->imageUrl(600, 400),
        ];
    }
}