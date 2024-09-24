<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       

        DB::table('lots')->insert([

            'name' => 'lot_zero',
            'guid' => 'ETUDE',
            'slug' => 'ETUDE',
            'description' => fake()->text(),
            'short_description' => fake()->text(),
            'color' => fake()->colorName(),
            'project_id' => (Project::whereTitle('gogogogo')->first())->id,

        ]);
    }
}
