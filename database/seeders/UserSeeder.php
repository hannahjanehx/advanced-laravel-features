<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // these are so everytime it is refreshed we have set values we know we can login with
        User::factory()->create([
            'name' => 'Hannah',
            'email' => 'hannah@example.com'
        ]);
        User::factory()->create([
            'name' => 'Taylor',
            'email' => 'taylor@example.com'
        ]);
        User::factory()->create([
            'name' => 'Susan',
            'email' => 'instructor@example.com',
            'role' => 'instructor'
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);

        User::factory()->count(10)->create();

        // overwrite the default
        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
