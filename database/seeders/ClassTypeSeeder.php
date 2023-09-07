<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassType::create([
            'name' => 'Yoga',
            'description' => fake()->text(),
            'minutes' => 90
        ]);
        ClassType::create([
            'name' => 'Dance',
            'description' => fake()->text(),
            'minutes' => 60
        ]);
        ClassType::create([
            'name' => 'Zumba',
            'description' => fake()->text(),
            'minutes' => 45
        ]);
        ClassType::create([
            'name' => 'Kick Boxing',
            'description' => fake()->text(),
            'minutes' => 60
        ]);
        ClassType::create([
            'name' => 'Meditation',
            'description' => fake()->text(),
            'minutes' => 30
        ]);
    }
}
