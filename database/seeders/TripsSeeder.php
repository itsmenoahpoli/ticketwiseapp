<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Trips\Trip;

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$faker = \Faker\Factory::create();

        for ($i = 0; $i <= 500; $i++)
		{
			Trip::query()->create([
				'trip_no' 			=> 'TRIP-' . Str::upper(Str::random(5)),
				'current_location' 	=> ['long' => 120.984222, 'lat' => 14.599512],
				'bus_line' 			=> $faker->randomElement(['JAC', 'JAM', 'DLTB']),
				'bus_no' 			=> $faker->randomNumber(5, true),
				'origin' 			=> $faker->city(),
				'destination' 		=> $faker->city(),
				'trip_date' 		=> $faker->date(),
				'departure_time' 	=> $faker->time('H:i:s'),
				'arrival_time' 		=> $faker->time('H:i:s'),
				'status' 			=> $faker->randomElement(['scheduled', 'cancelled', 'completed']),
			]);
		}
    }
}
