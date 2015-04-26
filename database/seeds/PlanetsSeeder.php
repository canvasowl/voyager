<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Planet;

class PlanetsSeeder extends Seeder {
    public function run()
    {

        // Mercury
        Planet::create(
            [
                'name' => 'Mercury',
                'diameter' => 4878,
                'radius' => 6052,
                'type' => 'terrestrial',
                'gravity' => 8.87,
                'distance_from_sun' => 108200000,
                'orbital_period' => 0.62,
                'ring' => 0,
            ]);

        // Venus
        Planet::create(
            [
                'name' => 'Venus',
                'diameter' => 1204,
                'radius' => 2440,
                'type' => 'terrestrial',
                'gravity' => 3.7,
                'distance_from_sun' => 57910000,
                'orbital_period' => 0.24,
                'ring' => 0,
            ]);

        // Earth
        Planet::create(
            [
                'name' => 'Earth',
                'diameter' => 12756,
                'radius' => 6371,
                'type' => 'terrestrial',
                'gravity' => 9.807,
                'distance_from_sun' => 149500000,
                'orbital_period' => 1,
                'ring' => 0,
            ]);
    }
} 