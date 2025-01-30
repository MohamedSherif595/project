<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(30)->create([

            'name'=>fake()->jobTitle(),
            'price'=>fake()->numberBetween(5000,200000),
            'image'=>fake()->filePath(),
            'member_id'=>Member::factory(),
        ]);
    }
}
