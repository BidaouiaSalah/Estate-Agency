<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\EstateFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TransactionTypeSeeder::class,
            PropertyTypeSeeder::class,
            AmenitySeeder::class,
            UserSeeder::class,
            PropertySeeder::class,
        ]);
    }
}
