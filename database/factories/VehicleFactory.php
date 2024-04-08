<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'vehicle_brand' => $this->faker->randomElement(['Toyota', 'Ford', 'Honda', 'Chevrolet', 'Volkswagen', 'BMW', 'Mercedes-Benz', 'Audi', 'Nissan', 'Tesla', 'Hyundai', 'Kia', 'Subaru', 'Mazda', 'Volvo', 'Jeep', 'Lexus', 'Ferrari', 'Porsche']),
        'doors_number' => $this->faker->numberBetween(2, 4),
        'model' => $this->faker->dateTimeBetween('-1 year', 'now'),
        'color' => $this->faker->randomElement(['Red', 'Yellow', 'Blue', 'White', 'Black', 'Green', 'Orange']),
        'cylinder_capacity_cc' => $this->faker->numberBetween(800, 3000),
        'horse_power' => $this->faker->numberBetween(100, 1000)
        ];
    }
}
