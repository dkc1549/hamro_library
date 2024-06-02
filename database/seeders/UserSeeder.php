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
        User::insert([
            [
                'name' => 'Ram',
                'email' => 'ram@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hari',
                'email' => 'hari@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shyam',
                'email' => 'shyam@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Krishna',
                'email' => 'krishna@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt("password"),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
