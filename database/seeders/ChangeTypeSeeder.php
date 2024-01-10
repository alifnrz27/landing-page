<?php

namespace Database\Seeders;

use App\Models\ChangeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChangeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Limited',
            ],
            [
                'name' => 'Unlimited',
            ]
            ];

        ChangeType::insert($types);
    }
}
