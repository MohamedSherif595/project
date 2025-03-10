<?php

namespace Database\Seeders;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::factory()->create([
            'name'=> fake()->name(),
            'email'=>fake()->email()
        ]
        );
    }
}
