<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workshop>
 */
class WorkshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'maps_url' => $this->faker->url(),
            'operational_days' => 'Mon-Sat',
            'operational_hours' => '08:00-17:00',
            'image' => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
