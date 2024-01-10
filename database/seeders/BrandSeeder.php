<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'user_id' => 1,
                'total_shopping' => 100000,
                'point' => 1,
                'company_name' => "Company Z"
            ],
            [
                'user_id' => 2,
                'total_shopping' => 100000,
                'point' => 1,
                'company_name' => "Company A"
            ],

            [
                'user_id' => 3,
                'total_shopping' => 100000,
                'point' => 1,
                'company_name' => "Company B"
            ],
            ];

        Brand::insert($brands);
    }
}
