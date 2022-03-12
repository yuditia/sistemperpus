<?php

namespace Database\Seeders;

use App\Models\Breturn;
use Illuminate\Database\Seeder;

class BreturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breturn::factory(30)->create();
    }
}
