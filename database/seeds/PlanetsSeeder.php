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
                'gravity' => 0.38,
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
                'gravity' => 0.9,
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
                'gravity' => 1,
                'distance_from_sun' => 149500000,
                'orbital_period' => 1,
                'ring' => 0,
            ]);

        // Mars
        Planet::create(
            [
                'name' => 'Mars',
                'diameter' => 6787,
                'radius' => 3390,
                'type' => 'terrestrial',
                'gravity' => 0.38,
                'distance_from_sun' => 227900000,
                'orbital_period' => 1.88,
                'ring' => 0,
            ]); 

        // Jupiter
        Planet::create(
            [
                'name' => 'Jupiter',
                'diameter' => 11.209,
                'radius' => 69911,
                'type' => 'gas',
                'gravity' => 2.64,
                'distance_from_sun' => 778500000,
                'orbital_period' => 11.86,
                'ring' => 1,
            ]);   

        // Saturn
        Planet::create(
            [
                'name' => 'Saturn',
                'diameter' => 9.44,
                'radius' => 58232,
                'type' => 'gas',
                'gravity' => 0.93,
                'distance_from_sun' => 1433000000,
                'orbital_period' => 29.46,
                'ring' => 1,
            ]);  

        // Uranus
        Planet::create(
            [
                'name' => 'Uranus',
                'diameter' => 4.007,
                'radius' => 25362,
                'type' => 'gas',
                'gravity' => 0.89,
                'distance_from_sun' => 2877000000,
                'orbital_period' => 84.01,
                'ring' => 1,
            ]); 

        // Neptune
        Planet::create(
            [
                'name' => 'Neptune',
                'diameter' => 3.883,
                'radius' => 24622,
                'type' => 'gas',
                'gravity' => 1.12,
                'distance_from_sun' => 4503000000,
                'orbital_period' => 164.8,
                'ring' => 1,
            ]);                                                        
    }
} 