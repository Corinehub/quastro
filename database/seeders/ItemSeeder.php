<?php

namespace Database\Seeders;

use App\Models\Lot;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('items')->insert([

            'name' => 'Decoration',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]); 
        
        DB::table('items')->insert([

            'name' => 'Froid et climatisation',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Menuserie',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Peinture',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Finition',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Carrellage',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' =>'Tolerie',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Echaffodage',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Electricité',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);
        
        DB::table('items')->insert([

            'name' => 'Plombérie',
            'domaine' => 'ETUDE',
            'description' => fake()->text(),
            'start_at' => fake()->date(),
            'end_at' => fake()->date(),
            'color' => fake()->colorName(),
            'prices' => fake()->randomNumber(),
            'lot_id' => (Lot::whereName('lot_zero')->first())->id,
 
        ]);



    }
}
