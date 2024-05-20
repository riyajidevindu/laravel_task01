<?php

namespace Database\Seeders;

use App\Models\Donor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    public function run()
    {
        Donor::factory()->count(10)->create(); // Creates 10 donor records
    }
}
