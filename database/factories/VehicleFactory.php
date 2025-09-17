<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'customer_id' => User::factory(),
            'brand' => $this->faker->randomElement(['Yamaha', 'Honda', 'Suzuki', 'Kawasaki']),
            'model' => $this->faker->randomElement([
                'Yamaha NMAX 155',
                'Yamaha Aerox 155',
                'Yamaha Mio M3',
                'Yamaha Fazzio',
                'Yamaha Gear 125',
                'Yamaha Lexi 125',
                'Yamaha R15',
                'Yamaha XSR 155',
                'Honda Vario 125',
                'Honda Vario 160',
                'Honda BeAT',
                'Honda Scoopy',
                'Honda Genio',
                'Honda PCX 160',
                'Honda CBR150R',
                'Honda CB150R Streetfire',
                'Honda Supra X 125',
                'Honda Revo X',
                'Suzuki Satria F150',
                'Suzuki Nex II',
                'Suzuki Address',
                'Suzuki GSX-R150',
                'Suzuki GSX-S150',
                'Suzuki Smash FI',
                'Suzuki Avenis 125',
                'Kawasaki Ninja 250',
                'Kawasaki ZX-25R',
                'Kawasaki KLX 150',
                'Kawasaki W175',
                'Kawasaki D-Tracker 150',
            ]),
            'year' => $this->faker->year(),
            'license_plate' => strtoupper($this->faker->bothify('?? ### ??')),
            'vehicle_image' => $this->faker->imageUrl(640, 480, 'transport', true),
        ];
    }
}
