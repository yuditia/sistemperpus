<?php

namespace Database\Seeders;

use App\Models\Dpinjam;
use App\Models\Pbook;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StaffSeeder::class,
            JenisAnggotaSeeder::class,
            UserSeeder::class,
            JbukuSeeder::class,
            RbukuSeeder::class,
            BookSeeder::class,
            DpinjamSeeder::class,
            PbookSeeder::class
        ]);
    }
}
