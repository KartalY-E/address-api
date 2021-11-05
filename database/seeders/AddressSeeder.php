<?php

namespace Database\Seeders;


use Database\Factories\AdressFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 15 fake addressses
        Address::factory()->count(15)->create();
    }
}
