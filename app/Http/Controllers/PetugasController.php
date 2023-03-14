<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $title = 'Data Petugas';

        $petugas = Petugas::all();
        return view('contents.petugas.index', compact('petugas'));
    }
    
    public function tambah()
    {
        $title = 'Tambah Petugas';

        $level = Petugas::all();
        return view('contents.petugas.tambah', compact('level'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);

        Petugas::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level,
        ]);
        
        return redirect('/petugas')->with('success','Petugas berhasil ditambahkan');
    }

    public function edit($id_petugas)
    {
        $title = 'Edit Petugas';

        $petugas = Petugas::where('id_petugas', $id_petugas)->first();
        return view('contents.petugas.edit', compact('petugas'));
    }

    public function update(Request $request, $id_petugas)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);

        Petugas::where('id_petugas', $id_petugas)->update($validatedData);
        return redirect('/petugas')->with('success', 'Data berhasil dirubah');
    }

    public function delete($id_petugas)
    {
        Petugas::where('id_petugas', $id_petugas)->delete();
        return redirect('/petugas')->with('success', 'Data berhasil dihapus');
    }
}
