<?php

namespace Database\Seeders;

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
        $faker = Factory::create();

        // Test user
        DB::table('users')->insert([
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'userName' => $faker->userName,
            'age' => $faker->numberBetween(1, 99),
            'country' => $faker->country,
            'city' => $faker->address,
            'street' => $faker->streetName,
            'houseNr' => $faker->numberBetween(1, 1500),
            'iban' => $faker->iban,
            'creditCardType' => $faker->creditCardType,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => $faker->unixTime,
            'updated_at' => $faker->unixTime,
        ]);
    }
}
