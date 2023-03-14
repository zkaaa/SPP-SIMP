<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama_kelas' => 'Kelas 10',
            'kompetensi_keahlian' => '-'
        ]);
        
        Kelas::create([
            'nama_kelas' => 'Kelas 11',
            'kompetensi_keahlian' => '-'
        ]);
        
        Kelas::create([
            'nama_kelas' => 'Kelas 12',
            'kompetensi_keahlian' => '-'
        ]);
    }
}
