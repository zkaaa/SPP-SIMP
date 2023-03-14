<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $title = 'Data Kelas';

        $kelas = Kelas::all();

        return view('contents.kelas.index', compact('kelas'));
    }
    
    public function tambah()
    {
        $title = 'Tambah Kelas';
        return view('contents.kelas.tambah');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ]);

        return redirect('/kelas');
    }

    public function edit($id_kelas)
    {
        $title = 'Edit Kelas';

        $kelas = Kelas::where('id_kelas', $id_kelas)->first();
        return view('contents.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id_kelas)
    {
        $validatedData = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required'
        ]);

        Kelas::where('id_kelas', $id_kelas)->update($validatedData);
        return redirect('/kelas')->with('success', 'Data berhasil dirubah');
    }

    public function delete($id_kelas)
    {
        Kelas::where('id_kelas', $id_kelas)->delete();
        return redirect('/kelas')->with('success', 'Data berhasil ditambahkan');
    }
}
