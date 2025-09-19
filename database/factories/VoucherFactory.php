<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'workshop_id' => \App\Models\Workshop::factory(),
            'code' => strtoupper($this->faker->bothify('VCH###')),
            'title' => 'Diskon Spesial ' . $this->faker->word(),
            'discount_amount' => $this->faker->randomFloat(2, 10000, 50000),
            'max_discount' => $this->faker->randomFloat(2, 50000, 100000),
            'usage_limit' => $this->faker->numberBetween(10, 100),
            'used_count' => 0,
            'valid_from' => now(),
            'valid_until' => now()->addDays(30),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
