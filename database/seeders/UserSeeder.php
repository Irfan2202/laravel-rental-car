<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Owner 1',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'phone' => '08123456789',
            'address' => 'Jakarta',
            'role' => 'owner',
        ]);

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'phone' => '08234567890',
            'address' => 'Bandung',
            'role' => 'admin',
        ]);

        // tambah beberapa user customer
        User::factory(5)->create([
            'role' => 'customer',
        ]);
    }
}
