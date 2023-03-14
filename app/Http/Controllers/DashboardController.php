<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $siswa = User::role('siswa')->paginate(10);
        $petugas = User::role('petugas')->paginate(10);
        $kelas = Kelas::paginate(5);


        $siswaCount = $siswa->count();
        $petugasCount = $petugas->count();
        $kelasCount = $kelas->count();
        return view('contents.index', 
        compact('siswa', 'kelasCount', 'siswaCount', 'petugasCount', 'kelas', 'petugas'));
    }
}
