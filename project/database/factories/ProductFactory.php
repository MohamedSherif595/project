<?php

namespace Database\Factories;
use App\Models\member;
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
            'name'=>fake()->jobTitle(),
            'price'=>fake()->numberBetween(5000 , 200000),
            'member_id'=>Member::factory()
        ];
    }
}
