<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->userName(),
            'email'=>$this->faker->safeEmail(),
            'password'=>$this->faker->password(),
            'jenis_anggota_id'=>mt_rand(1,2)
        ];
    }
}
