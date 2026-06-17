<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@secureops360.test'
            ],
            [
                'name' => 'System Administrator',
                'password' => Hash::make('Password123!')
            ]
        );
    }
}