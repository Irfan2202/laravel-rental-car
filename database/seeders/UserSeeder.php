<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User default 
        User::create([
            'name' => 'Super Owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'phone' => '08123456789',
            'address' => 'Jl. Merdeka No. 1',
            'role' => 'owner',
        ]);

        // Generate user dummy (10 data)
        User::factory(10)->create();
    }
}
