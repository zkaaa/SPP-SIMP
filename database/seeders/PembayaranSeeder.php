<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembayaran::create([
            'id_petugas' => '1',
            'nisn' => '0183921570',
            'bulan_dibayar' => 'februari',
            'tahun_dibayar' => '2023',
            'jumlah_bayar' => '300000'
        ]);
    }
}
