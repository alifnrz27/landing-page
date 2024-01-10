<?php

namespace Database\Seeders;

use App\Models\ChangeSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChangeSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Only take in store',
            ],
            [
                'name' => 'Only send to home',
            ],
            [
                'name' => 'Send home or take in store',
            ]
            ];

        ChangeSystem::insert($types);
    }
}
