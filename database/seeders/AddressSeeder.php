<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // 10 Fake addresses created with faker
        for ($i = 0; $i < 10; $i++) {
            DB::table('addresses')->insert([
                'country' => $faker->country,
                'city' => $faker->city,
                'postcode' => $faker->numberBetween(10, 9999),
                'streetName' => $faker->streetName,
                'buildingNumber' => $faker->buildingNumber,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'created_at' => $faker->unixTime,
                'updated_at' => $faker->unixTime,
            ]);
        }
    }
}
