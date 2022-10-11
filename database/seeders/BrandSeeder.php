<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'KIA'
        ]);

        DB::table('brands')->insert([
            'name' => 'HYUNDAI'
        ]);

        DB::table('brands')->insert([
            'name' => 'CHEVROLET'
        ]);
    }
}
