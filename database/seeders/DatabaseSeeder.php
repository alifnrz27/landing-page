<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ChangeType;
use App\Models\ClaimType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
        UserSeeder::class,
        ChangeTypeSeeder::class,
        ClaimTypeSeeder::class,
        RoleSeeder::class,
        BrandSeeder::class,
        ChangeSystemSeeder::class,
        BuildingTypeSeeder::class,
        subdomainSeeder::class,
        ]);
    }
}
