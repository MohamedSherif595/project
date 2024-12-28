<?php

namespace Database\Seeders;

use App\Models\members;
use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        post::factory(50)->create([

            'name'=>fake()->country(),
            'members_id'=>members::factory(),
        ]);

    }
}
