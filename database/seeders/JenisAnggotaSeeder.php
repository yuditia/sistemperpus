<?php

namespace Database\Seeders;

use App\Models\JenisAnggota;
use Illuminate\Database\Seeder;

class JenisAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisAnggota::factory(2)->create();
    }
}
