<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DpinjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id'=>mt_rand(1,30),
            'pbook_id'=>mt_rand(1,30)
        ];
    }
}
