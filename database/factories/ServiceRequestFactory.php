<?php

namespace Database\Factories;

use App\Models\ServiceLog;
use App\Models\ServiceType;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Queue\Worker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceRequest>
 */
class ServiceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => User::factory(),
            'workshop_id' => Workshop::factory(),
            'vehicle_id' => Vehicle::factory(),
            'service_type_id' => ServiceType::factory(),
            'scheduled_date' => $this->faker->dateTimeBetween('+1 days', '+30 days'),
            'status' => 'Pending',
            'technician_id' => null,
            'payment_status' => 'Unpaid',
        ];
    }
}
