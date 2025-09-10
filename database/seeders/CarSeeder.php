<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'brand' => 'Toyota',
                'type' => 'Avanza',
                'year' => 2021,
                'plate_number' => 'B1234XYZ',
                'color' => 'Black',
                'fuel_type' => 'Petrol',
                'transmission' => 'Automatic',
                'seat_capacity' => 7,
                'price_per_day' => 35,
                'status' => 'available',
            ],
            [
                'brand' => 'Honda',
                'type' => 'Jazz',
                'year' => 2020,
                'plate_number' => 'B5678ABC',
                'color' => 'Red',
                'fuel_type' => 'Petrol',
                'transmission' => 'Manual',
                'seat_capacity' => 5,
                'price_per_day' => 30,
                'status' => 'booked',
            ],
            [
                'brand' => 'Mitsubishi',
                'type' => 'Pajero',
                'year' => 2019,
                'plate_number' => 'D1111DEF',
                'color' => 'White',
                'fuel_type' => 'Diesel',
                'transmission' => 'Automatic',
                'seat_capacity' => 7,
                'price_per_day' => 70,
                'status' => 'rented',
            ],
            [
                'brand' => 'BMW',
                'type' => 'X5',
                'year' => 2022,
                'plate_number' => 'L2222GHI',
                'color' => 'Blue',
                'fuel_type' => 'Hybrid',
                'transmission' => 'Automatic',
                'seat_capacity' => 5,
                'price_per_day' => 150,
                'status' => 'maintenance',
            ],
            [
                'brand' => 'Suzuki',
                'type' => 'Ertiga',
                'year' => 2021,
                'plate_number' => 'B4321QWE',
                'color' => 'Silver',
                'fuel_type' => 'Petrol',
                'transmission' => 'Manual',
                'seat_capacity' => 7,
                'price_per_day' => 28,
                'status' => 'available',
            ],
            [
                'brand' => 'Nissan',
                'type' => 'Livina',
                'year' => 2018,
                'plate_number' => 'F8765RTY',
                'color' => 'Gray',
                'fuel_type' => 'Petrol',
                'transmission' => 'Automatic',
                'seat_capacity' => 7,
                'price_per_day' => 27,
                'status' => 'available',
            ],
            [
                'brand' => 'Tesla',
                'type' => 'Model 3',
                'year' => 2023,
                'plate_number' => 'Z123TES',
                'color' => 'White',
                'fuel_type' => 'Electric',
                'transmission' => 'Automatic',
                'seat_capacity' => 5,
                'price_per_day' => 200,
                'status' => 'booked',
            ],
            [
                'brand' => 'Ford',
                'type' => 'Ranger',
                'year' => 2019,
                'plate_number' => 'H5555TTT',
                'color' => 'Black',
                'fuel_type' => 'Diesel',
                'transmission' => 'Manual',
                'seat_capacity' => 5,
                'price_per_day' => 80,
                'status' => 'rented',
            ],
            [
                'brand' => 'Kia',
                'type' => 'Seltos',
                'year' => 2021,
                'plate_number' => 'BSEL2021',
                'color' => 'Green',
                'fuel_type' => 'Petrol',
                'transmission' => 'Automatic',
                'seat_capacity' => 5,
                'price_per_day' => 40,
                'status' => 'available',
            ],
            [
                'brand' => 'Hyundai',
                'type' => 'Santa Fe',
                'year' => 2022,
                'plate_number' => 'BHYU123',
                'color' => 'Gray',
                'fuel_type' => 'Diesel',
                'transmission' => 'Automatic',
                'seat_capacity' => 7,
                'price_per_day' => 90,
                'status' => 'maintenance',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
