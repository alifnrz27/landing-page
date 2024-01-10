<?php

namespace Database\Seeders;

use App\Models\BuildingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Rumah',
            ],
            [
                'name' => 'Kantor',
            ]
            ];

        BuildingType::insert($types);
    }
}
