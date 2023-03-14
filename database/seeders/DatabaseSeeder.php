<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
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
        $this->call([kelasSeeder::class]);
        // $this->call([MonthSeeder::class]);
        // $this->call([PembayaranSeeder::class]);
        $this->call([PetugasSeeder::class]);
        $this->call([SiswaSeeder::class]);
        $this->call([SppSeeder::class]);
    }
}
