<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \database\seeders\Management\SalesSeeder;
use \database\seeders\Management\PerformanceSeeder;
use \database\seeders\Management\TrafficSeeder;

class ChartController extends Controller
{
    //
    public function run($chartType)
    {
        // Assuming you have separate seeders for each chart type.
        // Adjust the namespace and seeder class names as needed.
        if ($chartType === 'sales') {
            $data = SalesSeeder::run();
        } elseif ($chartType === 'performance') {
            $data = PerformanceSeeder::run();
        } elseif ($chartType === 'traffic') {
            $data = TrafficSeeder::run();
        } else {
            return response()->json(['error' => 'Invalid chart type.'], 400);
        }

        return response()->json($data);
    }
}
