<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JbukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis'=>$this->faker->unique()->randomElement(['pelajaran','majalah','novel'])
        ];
    }
}
