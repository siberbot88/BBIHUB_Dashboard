<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceType>
 */
class ServiceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Oil Change', 'Brake Check', 'Engine Tune-up']),
            'duration_days' => $this->faker->numberBetween(90, 365),
            'slots_added' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 100, 500),
        ];
    }
}
