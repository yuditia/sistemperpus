<?php

namespace Database\Seeders;

use App\Models\Pbook;
use Illuminate\Database\Seeder;

class PbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pbook::factory(30)->create();
    }
}
