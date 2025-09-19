<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_name' => $this->faker->randomElement([
                'Service besar',
                'Ganti kampas rem',
                'Ganti oli',
                'Ganti Ban belakang',
                'Tune-up mesin'
            ]),
            'price' => $this->faker->randomFloat(2, 100000, 500000),
        ];
    }
}
