<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Estate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estate::factory()->count(20)
            ->has(Amenity::factory()->count(10), 'amenities')
            ->create();
        // EstateFactory::count(20)->create();
    }
}
