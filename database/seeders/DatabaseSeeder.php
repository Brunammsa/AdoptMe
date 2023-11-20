<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Api User',
            'email' => 'user@api',
            'password' => 'megaman2',
        ]);

        $this->call([
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
        ]);
    }
}