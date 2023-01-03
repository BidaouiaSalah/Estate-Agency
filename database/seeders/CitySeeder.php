<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = fake()->name;

        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
        City::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
    }
}
