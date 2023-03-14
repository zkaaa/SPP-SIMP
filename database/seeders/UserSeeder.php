<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nama' => 'azka',
            'email' => 'azka@gmail.com',
            'password' => Hash::make('123123'),
            'nis' => '00454778902',
            'nisn' => '2021.10.093',
            'id_kelas' => 2,
            'alamat' => 'Kp. Bojong Tanjung RT1/17 No.25, Kec. Katapang, Kab. Bandung',
            'no_telp' => '082115059769',
            'id_spp' => null,
        ]);
        $user->assignRole('siswa');

        $user = User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
            'nis' => null,
            'nisn' => null,
            'id_kelas' => null,
            'alamat' => null,
            'no_telp' => null,
            'id_spp' => null,
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'nama' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('123123'),
            'nis' => null,
            'nisn' => null,
            'id_kelas' => null,
            'alamat' => null,
            'no_telp' => null,
            'id_spp' => null,
        ]);
        $user->assignRole('petugas');
    }
}
