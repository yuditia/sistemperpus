<?php

namespace Database\Seeders;

use App\Models\Dpinjam;
use Database\Factories\DpinjamFactory;
use Illuminate\Database\Seeder;

class DpinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dpinjam::factory(30)->create();
    }
}
