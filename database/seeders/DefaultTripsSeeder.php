<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DefaultTripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'origin' => 'Cubao',
                'destination' => 'Balibago, Laguna',
                'times' => [
                    '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00',
                    '10:00', '11:00', '12:00', '13:00', '14:00', '15:00',
                    '16:00', '17:00', '18:00', '19:00'
                ]
            ],
            [
                'origin' => 'Cubao',
                'destination' => 'Cabuyao, Laguna',
                'times' => [
                    '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00',
                    '9:00', '10:00', '11:00', '12:00', '13:00', '14:00',
                    '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'
                ]
            ],
            [
                'origin' => 'LRT Buendia',
                'destination' => 'Balibago, Laguna',
                'times' => [
                    '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00',
                    '12:00', '13:00', '14:00', '16:00', '17:00', '18:00',
                    '19:00', '20:00', '21:00'
                ]
            ],
            [
                'origin' => 'LRT Buendia',
                'destination' => 'Biñan, Laguna',
                'times' => [
                    '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00',
                    '12:00', '13:00', '14:00', '16:00', '17:00', '18:00',
                    '19:00', '20:00', '21:00'
                ]
            ],
            [
                'origin' => 'LRT Buendia',
                'destination' => 'Cabuyao, Laguna',
                'times' => [
                    '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00',
                    '9:00', '10:00', '11:00', '12:00', '13:00', '14:00',
                    '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'
                ]
            ],
            [
                'origin' => 'Cabuyao, Laguna',
                'destination' => 'Cubao',
                'times' => [
                    '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00',
                    '11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
                    '17:00', '18:00', '19:00', '20:00'
                ]
            ],
            [
                'origin' => 'Biñan, Laguna',
                'destination' => 'LRT Buendia',
                'times' => [
                    '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00',
                    '11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
                    '17:00', '18:00', '19:00', '20:00'
                ]
            ],
            [
                'origin' => 'Cabuyao, Laguna',
                'destination' => 'LRT Buendia',
                'times' => [
                    '4:30', '5:30', '6:30', '7:30', '8:30', '9:30', '10:30',
                    '11:30', '12:30', '13:30', '14:30', '15:30', '16:30'
                ]
            ]
        ];

        $tripCounter = 1;
        $today = Carbon::today();
		$faker = \Faker\Factory::create();

        foreach ($routes as $route) {
            foreach ($route['times'] as $time) {
                // Calculate arrival time (assuming 2 hours travel time)
                $departureTime = Carbon::createFromFormat('H:i', $time);
                $arrivalTime = $departureTime->copy()->addHours(2);

                DB::table('trips')->insert([
                    'trip_no' 				=> 'TRIP-' . str_pad($tripCounter++, 4, '0', STR_PAD_LEFT),
                    'current_location' 		=> json_encode([
                        'latitude' 	=> null,
                        'longitude' => null
                    ]),
                    'bus_line' 				=> $faker->randomElement(['DLTB', 'Victory Liner', 'ASG Transit']),
                    'bus_no' 				=> 'BUS-' . str_pad(rand(1, 100), 3, '0', STR_PAD_LEFT),
                    'origin' 				=> $route['origin'],
                    'destination' 			=> $route['destination'],
                    'trip_date' 			=> $today,
                    'departure_time' 		=> $departureTime->format('H:i:s'),
                    'arrival_time' 			=> $arrivalTime->format('H:i:s'),
					'ticket_price'			=> rand(175, 1520),
                ]);
            }
        }
    }
}
