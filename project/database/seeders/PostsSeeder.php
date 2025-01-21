<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        post::factory(30)->create([

            'name'=>fake()->country(),
            'member_id'=>Member::factory(),
        ]);

    }
}
