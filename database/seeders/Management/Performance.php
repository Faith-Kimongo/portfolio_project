<?php

namespace Database\Seeders\Management;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Management\Performance;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Performance::create([
            'percentage_increase' => 2.1,
            'day' => '2023-07-20',
        ]);

        Performance::create([
            'percentage_increase' => -3.5,
            'day' => '2023-07-21',
        ]);

        Performance::create([
            'percentage_increase' => 6.2,
            'day' => '2023-07-22',
        ]);

        Performance::create([
            'percentage_increase' => 8.7,
            'day' => '2023-07-23',
        ]);
    
    }
}
