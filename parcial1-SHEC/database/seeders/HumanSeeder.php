<?php

namespace Database\Seeders;

use App\Models\Human;
use Illuminate\Database\Seeder;

class HumanSeeder extends Seeder
{
    /**
     * Seed the humans table.
     */
    public function run(): void
    {
        Human::factory()->create([
            'name' => 'Didi',
            'aura' => 9500,
            'hierarchy' => Human::HIERARCHY_LEGENDARY,
        ]);

        Human::factory()->create([
            'name' => 'Jefry Epstein',
            'aura' => 8700,
            'hierarchy' => Human::HIERARCHY_LEGENDARY,
        ]);

        Human::factory()->create([
            'name' => 'Tung Tung Sahur',
            'aura' => 9999,
            'hierarchy' => Human::HIERARCHY_LEGENDARY,
        ]);

        Human::factory()->create([
            'name' => 'Daniel Correa',
            'aura' => 10000,
            'hierarchy' => Human::HIERARCHY_LEGENDARY,
        ]);

        Human::factory(6)->create();
    }
}
