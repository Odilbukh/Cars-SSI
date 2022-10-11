<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'car_model_id' => CarModel::where('name', 'Sportage')->select('id')->first()->id ?? 0,
            'image' => 'cars/Sportage.jpg',
            'year_issue' => 2022,
            'car_number' => '10A100AA',
            'color' => 'white',
            'kp' => 'Автомат',
            'daily_coast' => 65.00
        ]);

        DB::table('cars')->insert([
            'car_model_id' => CarModel::where('name', 'Onix')->select('id')->first()->id ?? 0,
            'image' => 'cars/Onix.jpg',
            'year_issue' => 2020,
            'car_number' => '01A777BC',
            'color' => 'Black',
            'kp' => 'Механик',
            'daily_coast' => 40.00
        ]);

        DB::table('cars')->insert([
            'car_model_id' => CarModel::where('name', 'Elantra')->select('id')->first()->id ?? 0,
            'image' => 'cars/Elantra.jpg',
            'year_issue' => 2021,
            'car_number' => '01A777BC',
            'color' => 'Red',
            'kp' => 'Автомат',
            'daily_coast' => 50.00
        ]);
    }
}
