<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\ServiceLog;
use App\Models\ServiceRequest;
use App\Models\ServiceType;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Workshop;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Workshop::factory(3)->create()->each(function ($workshop) {
        // Create Admins & Technicians
        User::factory(1)->create([
            'role' => 'WorkshopAdmin',
            'workshop_id' => $workshop->id,
        ]);

        User::factory(2)->create([
            'role' => 'Technician',
            'workshop_id' => $workshop->id,
        ]);
    });

    // Create Customers with Vehicles
        User::factory(5)->create(['role' => 'Customer'])->each(function ($user) {
        Vehicle::factory(2)->create(['customer_id' => $user->id]);
        });

        ServiceType::factory(5)->create();

        ServiceRequest::factory(10)->create();

        ServiceLog::factory(10)->create();

        Notification::factory(10)->create();

        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'superadmin',
            'email' => 'admin@bbi.test',
            'role' => 'SuperAdmin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
