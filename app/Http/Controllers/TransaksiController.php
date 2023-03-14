<?php

namespace App\Http\Controllers;

// use App\Models\Month;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $title = 'Data Transaksi';

        // $pembayaran = Month::get();
        $siswa = Siswa::all();
        $spp = Spp::all();

        return view('contents.transaksi.index', compact('siswa', 'spp'));
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'nama' => 'required',
        //     'tanggal' => 'required',
        //     'jumlah_bayar' => 'required',
        //     'bulan_dibayar' => 'required',
        //     'tahun_dibayar' => 'required',
        // ]);
        // dd($request);
        Pembayaran::create([
            'id_petugas' => Auth::guard('petugas')->user()->id_petugas,
            'id_siswa' => $request->nama,
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
