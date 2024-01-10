<?php

namespace Database\Seeders;

use App\Models\subdomain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class subdomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subdomains = [
            [
                'name' => '127',
            ],
            [
                'name' => 'localhost',
            ],
            [
                'name' => 'tokomas',
            ],
            ];

        subdomain::insert($subdomains);
    }
}
