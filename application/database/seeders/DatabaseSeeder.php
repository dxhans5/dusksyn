<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create default admin
        User::factory()->create([
            'name' => env('DEFAULT_ADMIN_NAME', 'Test User'),
            'email' => env('DEFAULT_ADMIN_EMAIL', 'test@test.com'),
            'password' => bcrypt(env('DEFAULT_ADMIN_PASSWORD', '123456')),
            'email_verified_at' => now(),
            'remember_token' => null,
        ]);
    }
}
