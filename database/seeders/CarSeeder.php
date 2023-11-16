<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarFuel;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Toyota', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hyundai', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lamborghini', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tesla', 'created_at' => now(), 'updated_at' => now()],
        ];

        $cars = [
            [
                'name' => 'Lamborghini Aventador',
                'price' => '24244',
                'brand_id' => 1,
                'image' => 'https://demo-egenslab.b-cdn.net/html/drivco/preview/assets/img/home6/product-img-06.png',
                'created_at' => now(), 'updated_at' => now(),
            ], [
                'name' => 'Hyundai Sonata-2022',
                'price' => '134355',
                'brand_id' => 2,
                'image' => 'https://demo-egenslab.b-cdn.net/html/drivco/preview/assets/img/home6/product-img-05.png',
                'created_at' => now(), 'updated_at' => now(),
            ], [
                'name' => 'BMW 3 Series-2023',
                'price' => '645646',
                'brand_id' => 3,
                'image' => 'https://demo-egenslab.b-cdn.net/html/drivco/preview/assets/img/home6/product-img-04.png',
                'created_at' => now(), 'updated_at' => now(),
            ], [
                'name' => 'Ferrari 458 Italia-2023',
                'price' => '745454',
                'brand_id' => 4,
                'image' => 'https://demo-egenslab.b-cdn.net/html/drivco/preview/assets/img/home6/product-img-03.png',
                'created_at' => now(), 'updated_at' => now(),
            ],

        ];

        $carFuels = [
            [
                'car_id' => 1,
                'range' => 45,
                'refill' => 120,
                'tour' => 80,
                'eco' => 75,
                'sport' => 143,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'car_id' => 2,
                'range' => 131,
                'refill' => 43,
                'tour' => 90,
                'eco' => 31,
                'sport' => 67,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'car_id' => 3,
                'range' => 48,
                'refill' => 120,
                'tour' => 85,
                'eco' => 65,
                'sport' => 165,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'car_id' => 4,
                'range' => 70,
                'refill' => 175,
                'tour' => 100,
                'eco' => 55,
                'sport' => 86,
                'created_at' => now(), 'updated_at' => now(),
            ],
        ];

        Brand::insert($brands);
        Car::insert($cars);
        CarFuel::insert($carFuels);
    }
}
