<?php

namespace Database\Seeders;

use App\Models\Jbuku;
use Illuminate\Database\Seeder;

class JbukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jbuku::factory(3)->create();
    }
}
