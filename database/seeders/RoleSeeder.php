<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Bussiness Owner',
            ],
            [
                'name' => 'Admin Branch',
            ],
            [
                'name' => 'Customer',
            ],
            [
                'name' => 'Sales',
            ],
            [
                'name' => 'Cashier',
            ]
            ];

        Role::insert($roles);
    }
}
