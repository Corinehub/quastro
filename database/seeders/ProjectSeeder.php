<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('projects')->insert([
            [
                'title' => 'gogogogo',
                'start' => fake()->date(),
                'end' => fake()->date(),
                'prices' => fake()->randomNumber(),

            ]
        ]);
    }
}
