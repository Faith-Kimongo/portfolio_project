<?php

namespace Database\Seeders\Management;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Management\Sales;
use Illuminate\Support\Facades\DB;


class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sales')->insert([
            ['percentage_increase' => 3, 'Amount' => 100],
            ['percentage_increase' => 4, 'Amount' => 200],
            ['percentage_increase' => 6, 'Amount' => 1150],
            // Add more data as needed...
            ['percentage_increase' => 1, 'Amount' => 1100],
            ['percentage_increase' => 4, 'Amount' => 2100],
            ['percentage_increase' => 5, 'Amount' => 1150],
            //
            ['percentage_increase' => 36, 'Amount' => 1800],
            ['percentage_increase' => 42, 'Amount' => 2500],
            ['percentage_increase' => 60, 'Amount' => 11150],
        ]);

        // Sales::create([
        //     'percentage_increase' => 4,
        //     'amount' => 500,
        //     // 'day' => '2023-07-20',
        // ]);

        // Sales::create([
        //     'percentage_increase' => 5,
        //     'amount' => 800,
        //     // 'day' => '2023-07-21',
        // ]);

        // Sales::create([
        //     'percentage_increase' => 6,
        //     'amount' => 600,
        //     // 'day' => '2023-07-22',
        // ]);
    }
    
}
