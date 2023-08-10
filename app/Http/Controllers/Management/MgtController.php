<?php

namespace App\Http\Controllers\Management;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management\Sales;
use App\Models\Management\Performance;
use App\Models\Management\Traffic;
class MgtController extends Controller
{
     /* 
        * Get the latest sales data from the database
        * Get the current day's performance data from the database
        * Get the previous day's performance data from the database
        * Calculate the percentage increase based on the difference between current and previous day's performance
        * Update the performance record with the calculated percentage increase
        */
        
        public function showSalesOverview()
        {
            // Get the latest sales data from the database
            $salesData = Sales::latest()->first();
        
            if (!$salesData) {
                // If no data exists, create a new entry for today with default values
                $salesData = new Sales();
                $salesData->percentage_increase = 0; // Set the current percentage to 0
                $salesData->amount = 0; // Set the current amount to 0
                $salesData->day = Carbon::now()->toDateString(); // Set the day to the current date
                $salesData->save();
            } else {
                // Get the previous day's sales data from the database
                $previousDaySalesData = Sales::whereDate('day', Carbon::now()->subDay()->toDateString())->first();
        
                if ($previousDaySalesData) {
                    // Calculate the percentage increase or decrease based on the difference between the current day's sales amount and the previous day's sales amount
                    $percentageIncrease = ($salesData->amount - $previousDaySalesData->amount) / abs($previousDaySalesData->amount) * 100;
                    $salesData->percentage_increase = $percentageIncrease;
                } else {
                    // If it's the first day, set the percentage increase to 0 as there's no previous data to compare
                    $salesData->percentage_increase = 0;
                }
        
                // Save the updated sales data
                $salesData->save();
            }
        
            return view('management.mgthome', compact('salesData'));
        }


        public function performance()
        {
            // Get the latest performance data from the database
            $performanceData = Performance::latest()->first();
        
            if (!$performanceData) {
                // If no data exists, create a new entry for today with default values
                $performanceData = new Performance();
                $performanceData->percentage_increase = 0; // Set the current percentage to 0
                $performanceData->day = Carbon::now()->toDateString(); // Set the day to the current date
                $performanceData->save();
            } else {
                // Get the previous day's performance data from the database
                $previousDayPerformanceData = Performance::whereDate('day', Carbon::now()->subDay()->toDateString())->first();
        
                if ($previousDayPerformanceData) {
                    // Calculate the percentage increase or decrease based on the difference between the current day's performance and the previous day's performance
                    $percentageIncrease = ($performanceData->percentage_increase - $previousDayPerformanceData->percentage_increase) / abs($previousDayPerformanceData->percentage_increase) * 100;
                    $performanceData->percentage_increase = $percentageIncrease;
                } else {
                    // If it's the first day, set the percentage increase to 0 as there's no previous data to compare
                    $performanceData->percentage_increase = 0;
                }
        
                // Save the updated performance data
                $performanceData->save();
            }
        
            return view('management.mgthome', compact('performanceData'));
        }

        public function showTrafficOverview()
        {
            // Get the latest traffic data from the database
            $trafficData = Traffic::latest()->first();
        
            if (!$trafficData) {
                // If no data exists, create a new entry for today with default values
                $trafficData = new Traffic();
                $trafficData->percentage_increase = 0; // Set the current percentage to 0
                $trafficData->amount = 0; // Set the current amount to 0
                $trafficData->save();
            } else {
                // Get the previous day's traffic data from the database
                $previousDayTrafficData = Traffic::whereDate('created_at', Carbon::now()->subDay())->first();
        
                if ($previousDayTrafficData) {
                    // Calculate the percentage increase or decrease based on the difference between the current day's traffic amount and the previous day's traffic amount
                    $percentageIncrease = ($trafficData->amount - $previousDayTrafficData->amount) / abs($previousDayTrafficData->amount) * 100;
                    $trafficData->percentage_increase = $percentageIncrease;
                } else {
                    // If it's the first day, set the percentage increase to 0 as there's no previous data to compare
                    $trafficData->percentage_increase = 0;
                }
        
                // Save the updated traffic data
                $trafficData->save();
            }
        
            return view('management.mgthome', compact('trafficData'));
        }


}

