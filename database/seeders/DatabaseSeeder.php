<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Products;
use App\Models\Restaurants;
use App\Models\Employees;
use App\Models\Management\Sales;
use App\Models\Management\Performance;
use App\Models\Management\Traffic;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@smartwaiter.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Management User',
               'email'=>'management@smartwaiter.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@smartwaiter.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'staff User',
                'email'=>'staff@smartwaiter.com',
                'type'=>3,
                'password'=> bcrypt('123456'),
             ]
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
    
}
