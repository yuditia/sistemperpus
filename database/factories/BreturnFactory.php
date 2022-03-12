<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreturnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tkembali'=>$this->faker->dateTimeInInterval('+5 days', '+15 days'),
            'denda'=>$this->faker->randomDigit(),
            'user_id'=>mt_rand(1,30),
            'staff_id'=>mt_rand(1,30),
            'book_id'=>mt_rand(1,30)
        ];
    }
}
