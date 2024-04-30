<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '08123456789',
            'roles' => 'admin',
            'password' => Hash::make('password'),
        ]);

        //category
        Category::factory(4)->create();

        //product
        \App\Models\Product::factory(20)->create();
    }
}
