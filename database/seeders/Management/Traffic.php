<?php

namespace Database\Seeders\Management;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Management\Traffic;

class TrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Traffic::create([
            'percentage_increase' => 8.0,
            'amount' => 1400,
            'day' => '2023-07-20',
        ]);

        Traffic::create([
            'percentage_increase' => -2.8,
            'amount' => 1000,
            'day' => '2023-07-21',
        ]);

        Traffic::create([
            'percentage_increase' => 4.5,
            'amount' => 690,
            'day' => '2023-07-22',
        ]);
    }
}
