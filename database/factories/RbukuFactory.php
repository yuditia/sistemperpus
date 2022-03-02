<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RbukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->unique()->randomElement([
                'A','B','C','D'
            ]),
            'lokasi'=>$this->faker->unique()->randomElement([
                'utara','selatan','barat','timur'
            ])
            
        ];
    }
}
