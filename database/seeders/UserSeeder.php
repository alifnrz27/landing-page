<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'role_id' => 1,
                'email' => 'admin@admin.com',
                'subdomain_id' => 1,
                'username' => 'admin',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'Company A',
                'role_id' => 2,
                'email' => 'owner@companya.com',
                'subdomain_id' => 1,
                'username' => 'company1',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'Company B',
                'role_id' => 2,
                'email' => 'owner@companyb.com',
                'subdomain_id' => 2,
                'username' => 'company2',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'Company C',
                'role_id' => 2,
                'email' => 'owner@companyb.com',
                'subdomain_id' => 3,
                'username' => 'company3',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'User 1',
                'role_id' => 4,
                'email' => 'user1@gmail.com',
                'subdomain_id' => 1,
                'phone_number' => '123456789',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'User 1',
                'role_id' => 4,
                'email' => 'user1@gmail.com',
                'subdomain_id' => 2,
                'phone_number' => '123456789',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'User 2',
                'role_id' => 4,
                'email' => 'user2@gmail.com',
                'subdomain_id' => 1,
                'phone_number' => '1111111111',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ],
            [
                'name' => 'User 2',
                'role_id' => 4,
                'email' => 'user2@gmail.com',
                'subdomain_id' => 2,
                'phone_number' => '1111111111',
                'password' => bcrypt('password'),
                'last_digit_password' => 'rd'
            ]
            ];
        User::insert($users);
    }
}
