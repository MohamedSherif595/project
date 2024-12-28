<?php

namespace Database\Seeders;
use App\Models\members;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        members::factory()->create([
            'name'=> fake()->name(),
            'email'=>fake()->email()
        ]
        );
    }
}
