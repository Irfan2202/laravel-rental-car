<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'brand' => $this->faker->company(),
            'type' => $this->faker->word(),
            'year' => $this->faker->numberBetween(2015, 2023),
            'plate_number' => strtoupper($this->faker->bothify('??####??')),
            'color' => $this->faker->safeColorName(),
            'fuel_type' => $this->faker->randomElement(['Petrol', 'Diesel', 'Hybrid', 'Electric']),
            'transmission' => $this->faker->randomElement(['Manual', 'Automatic']),
            'seats_capacity' => $this->faker->numberBetween(4, 7),
            'price_per_day' => $this->faker->numberBetween(25, 200),
            'status' => $this->faker->randomElement(['available', 'booked', 'rented', 'maintenance']),
        ];
    }
}
