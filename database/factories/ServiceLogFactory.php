<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Queue\Worker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceLog>
 */
class ServiceLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_id' => Vehicle::factory(),
            'workshop_id' => Workshop::factory(),
            'service_date' => $this->faker->date(),
            'description' => $this->faker->sentence(10),
            'total_cost' => $this->faker->randomFloat(2, 150, 1000),
            'receipt_image' => $this->faker->imageUrl(640, 480, 'business'),
        ];
    }
}
