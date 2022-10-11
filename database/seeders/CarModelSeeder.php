<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert([
            'name' => 'Sportage',
            'brand_id' => Brand::where('name', 'KIA')->select('id')->first()->id ?? 0
        ]);

        DB::table('car_models')->insert([
            'name' => 'Onix',
            'brand_id' => Brand::where('name', 'CHEVROLET')->select('id')->first()->id ?? 0
        ]);

        DB::table('car_models')->insert([
            'name' => 'Elantra',
            'brand_id' => Brand::where('name', 'HYUNDAI')->select('id')->first()->id ?? 0
        ]);
    }
}
