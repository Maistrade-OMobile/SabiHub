<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminLogin;
use Illuminate\Support\Facades\Hash;

class AdminLoginSeeder extends Seeder
{
    public function run(): void
    {
        AdminLogin::updateOrCreate(
            ['email' => 'omobile@sabihub.ng'],
            ['password' => Hash::make('sabihub2025')]
        );
    }
}
