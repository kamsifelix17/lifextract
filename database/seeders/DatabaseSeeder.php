<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User (For Logging into Admin Panel)
        User::updateOrCreate(
            ['email' => 'admin@lifextract.org'],
            [
                'name' => 'LifeExtract Admin',
                'password' => bcrypt('password123'),
            ]
        );

        // 2. Call Our Custom Content Seeder (Programs, Episodes, Impact Stories)
        $this->call(PlatformContentSeeder::class);
    }
}