<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'postale_code' => rand(1000, 9999),
            'space' => fake()->randomDigitNotZero(),
            'price' => fake()->randomDigitNotNull(),
            'balconies' => fake()->randomDigitNotNull(),
            'bedrooms' => fake()->randomDigitNotNull(),
            'bathrooms' => fake()->randomDigitNotNull(),
            'garages' => fake()->randomDigitNotNull(),
            'parking_spaces' => fake()->randomDigitNotNull(),
            'available' => 1,
            'pets_allowed' => rand(0, 1),
            'type_id' => rand(1, 5),
            'user_id' => rand(1, 10)
        ];
    }
}
