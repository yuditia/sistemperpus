<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PbookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tpinjam'=>$this->faker->dateTimeInInterval('+1 days', '+5 days'),
            'tkembali'=>$this->faker->dateTimeInInterval('+5 days', '+15 days'),
            'user_id'=>mt_rand(1,30),
            'staff_id'=>mt_rand(1,30),
            'dpinjam_id'=>mt_rand(1,30)
        ];
    }
}
