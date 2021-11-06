<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Random user added exept 1
            'user_id' => User::all()->random()->id,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'postcode' => $this->faker->numberBetween(10, 9999),
            'streetName' => $this->faker->streetName,
            'buildingNumber' => $this->faker->buildingNumber,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'created_at' => $this->faker->unixTime,
            'updated_at' => $this->faker->unixTime
        ];
    }
}
