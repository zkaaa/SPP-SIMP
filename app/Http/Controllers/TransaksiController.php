<?php

namespace App\Http\Controllers;

// use App\Models\Month;
use App\Models\Spp;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $title = 'Data Transaksi';

        // $pembayaran = Month::get();
        $siswa = User::role('siswa')->get();
        $spp = Spp::all();

        return view('contents.transaksi.index', compact('siswa', 'spp'));
    }

    public function store(Request $request)
    {

        Pembayaran::create([
            'id_petugas' => Auth::user()->id,
            'id_siswa' => $request->namaSiswa,
            // 'id_month' => $request->id_month,
            'tanggal' => $request->tanggal,
            'jumlah_bayar' => $request->jumlah_dibayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
        ]);
        // dd($request);
        return redirect('/transaksi')->with('success', 'Data berhasil ditambahkan');
    }
}
