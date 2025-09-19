<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mohammad Bayu Rizki',
            'username' => 'adminbayu',
            'email' => 'mohammadbayurizki22@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dbadmin123'),
            'role' => 'SuperAdmin',
            'workshop_id' => null,
        ]);

    }
}
