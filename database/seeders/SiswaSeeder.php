<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nisn' => '1234567890',
            'nis' => '2021.10.14',
            'nama' => 'azka',
            'id_kelas' => '1',
            'alamat' => 'cirengit',
            'no_telp' => '081239751012',
            'id_spp' => '1'
        ]);
    }
}
