<?php

namespace Database\Seeders;

use App\Models\ClaimType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaimTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Voucher',
            ],
            [
                'name' => 'Hadiah',
            ]
            ];

        ClaimType::insert($types);
    }
}
