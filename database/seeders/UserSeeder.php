<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 admin created
        User::factory()->create([
            'is_admin' => true,
            'email' => 'admin@gmail.com',
            'firstName' => 'yunus',
            'lastName' => 'kartal',
        ]);

        // Creating 15 Users 
        User::factory()->count(15)->create();
    }
}
