<?php

namespace Database\Seeders;

use App\Models\Rbuku;
use Illuminate\Database\Seeder;

class RbukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rbuku::factory(4)->create();
    }
}
