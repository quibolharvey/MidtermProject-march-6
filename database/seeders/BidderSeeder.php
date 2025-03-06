<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bidder;

class BidderSeeder extends Seeder
{
    public function run()
    {
        Bidder::insert([
            ['first_name' => 'Harvey', 'last_name' => 'Quibol', 'address' => 'Calape', 'email' => 'harvey@gmail.com'],
            ['first_name' => 'Jeric', 'last_name' => 'Polison', 'address' => 'Tubigon', 'email' => 'jeric@gmail.com'],
            ['first_name' => 'Ivy', 'last_name' => 'Quino', 'address' => 'Tubigon', 'email' => 'ivy@gmail.com'],
        ]);
    }
}

