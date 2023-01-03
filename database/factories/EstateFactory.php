<?php

namespace Database\Factories;

use App\Models\Estate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estate>
 */
class EstateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estate::class;

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
            'postale_code' => rand(1000, 9999),
            'space' => fake()->randomDigitNotZero(),
            'price' => fake()->randomDigitNotNull(),
            'balconies' => fake()->randomDigitNotNull(),
            'bedrooms' => fake()->randomDigitNotNull(),
            'bathrooms' => fake()->randomDigitNotNull(),
            'garages' => fake()->randomDigitNotNull(),
            'parking_spaces' => fake()->randomDigitNotNull(),
            'available' => 1,
            'assigned' => 1,
            'pets_allowed' => rand(0, 1),
            'assignment_date' => fake()->date(),
            'type_id' => rand(1, 5),
            'city_id' => rand(1, 10),
            'agent_id' => rand(1, 10)
        ];
    }
}
