<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'password' => $this->faker->password(5,10), // password
            'name' => $this->faker->firstName(),
            'mobile' => $this->faker->phoneNumber(),
            'address' => $this->faker->city(),
        ];
    }
}
