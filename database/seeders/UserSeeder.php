<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use App\Models\Provider;
use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use App\Services\Nkd\UserServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         // Worker
         DB::table('workers')->insert([
            [
                'name' => 'corine',
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]
        ]);

        DB::table('users')->insert([
            [
                'email' => 'corine@gmail.com',
                'username' => 'corine',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'worker_id' => ( Worker::whereName('corine')->first() )->id,
            ]
        ]);




        DB::table('providers')->insert([
            [
                'name' => 'dodo',
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
            ]
        ]);
        DB::table('users')->insert([
            
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'provider_id' => ( Provider::whereName('dodo')->first() )->id,

        ]);

    }

}
