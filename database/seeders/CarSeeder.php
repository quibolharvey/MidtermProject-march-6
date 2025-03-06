<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::insert([
            ['make' => 'Toyota', 'model' => 'Camry', 'year' => 2020, 'miles' => 15000],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2018, 'miles' => 30000],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => 2022, 'miles' => 5000],
        ]);
    }
}

