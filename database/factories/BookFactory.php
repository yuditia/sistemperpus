<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jbuku_id'=>mt_rand(1,3),
            'rbuku_id'=>mt_rand(1,3),
            'name'=>$this->faker->unique()->word(),
            'author' =>$this->faker->firstName(),
            'publisher'=>$this->faker->name(),
            'isbn'=>$this->faker->isbn13(),
            'image'=>$this->faker->imageUrl(150, 150, 'books', true)
        ];
    }
}
