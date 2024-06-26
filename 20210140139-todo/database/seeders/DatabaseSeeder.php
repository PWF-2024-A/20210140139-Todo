<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4KoEa3Ro911C/.og/at2.uheWG/igi',
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        User::create(
            [
                'name' => 'indah',
                'email' => 'indah@indah.com',
                'email_verified_at' => now(),
                'password' => '12345678',
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        User::create(
            [
                'name' => 'sarah',
                'email' => 'sarah@sarah.com',
                'email_verified_at' => now(),
                'password' => '12345678',
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        User::create(
            [
                'name' => 'den',
                'email' => 'den@den.com',
                'email_verified_at' => now(),
                'password' => '12345678',
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );
        User::factory(100)->create();
        Todo::factory(500)->create();
        Category::factory(100)->create();
    }
}
