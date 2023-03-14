<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'Data Siswa';

        $siswa = Siswa::all();
        
        return view('contents.siswa.index', compact('siswa'));
    }

    public function tambah()
    {
        $title = 'Tambah Siswa';

        $kelas = Kelas::all();
        return view('contents.siswa.tambah', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => '1',
        ]);
        
        return redirect('/siswa')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function edit($nisn)
    {
        $title = 'Edit Siswa';

        $kelasList = Kelas::all();
        $siswa = Siswa::where('nisn', $nisn)->first();
        return view('contents.siswa.edit', compact('siswa','kelasList'));
    }

    public function update(Request $request, $nisn)
    {
        // dd($request);
       $validatedData =  $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);

        Siswa::where('nisn', $nisn)->update($validatedData);

        return redirect('/siswa')->with('success', 'Data berhasil dirubah');
    }

    public function delete($nisn)
    {
        Siswa::where('nisn', $nisn)->delete();
        return redirect('/siswa')->with('success', 'Data berhasil dihapus');
    }
}
