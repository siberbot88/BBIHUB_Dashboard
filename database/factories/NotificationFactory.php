<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => 'New Service Request',
            'message' => $this->faker->sentence(),
            'related_type' => 'ServiceRequest',
            'related_id' => null,
            'status' => 'Unread',
            'created_at' => now(),
        ];
    }
}
