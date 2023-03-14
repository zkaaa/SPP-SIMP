<?php

namespace Database\Seeders;

use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'username' => 'admin@admin.com',
            'password' => Hash::make('123'),
            'nama_petugas' => 'Moh Ikbal Hadi Permana',
            'level' => 'admin'
        ]);
        
        Petugas::create([
            'username' => 'petugas@petugas.com',
            'password' => Hash::make('123'),
            'nama_petugas' => 'Azka Ramdani',
            'level' => 'petugas'
        ]);
    }
}
