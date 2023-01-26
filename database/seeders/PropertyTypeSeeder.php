<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyType::create([
            'name' => 'House',
            'slug' => 'house'
        ]);
        PropertyType::create([
            'name' => 'Apartment',
            'slug' => 'apartment'
        ]);
        PropertyType::create([
            'name' => 'Land',
            'slug' => 'land'
        ]);
    }
}
