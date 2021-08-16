<?php

namespace Database\Seeders;

use App\Models\Space;
use Database\Factories\SpaceFactory;
use Illuminate\Database\Seeder;

class SpacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Space::factory()->count(100)->create();
    }
}
