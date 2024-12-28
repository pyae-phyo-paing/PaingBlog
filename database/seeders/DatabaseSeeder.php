<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Category::factory(10)->create();
        // Post::factory(10)->create();

        User::create([
            'name' => 'Pyae Phyo Paing',
            'phone' => '09789643501',
            'profile' => 'images/profiles/1735047938.jpg',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'Admin',
        ]);
    }
}
