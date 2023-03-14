<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
        $title = 'Data SPP';

        $spp = Spp::all();
        return view('contents.spp.index', compact('spp'));
    }

    public function tambah()
    {
        $title = 'Tambah SPP';
        return view('contents.spp.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required'
        ]);

        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
        ]);

        return redirect('/spp')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_spp)
    {
        $title = 'Edit spp';

        $spp = Spp::where('id_spp', $id_spp)->first();
        return view('contents.spp.edit', compact('spp'));
    }

    public function update(Request $request, $id_spp)
    {
        $validatedData = $request->validate([
            'tahun' => 'required',
            'nominal' => 'required'
        ]);
        Spp::where('id_spp', $id_spp)->update($validatedData);
        return redirect('/spp')->with('success', 'data berhasil dirubah');
    }

    public function delete($id_spp)
    {
        Spp::where('id_spp', $id_spp)->delete();
        return redirect('/spp')->with('success', 'Data berhasil dihapus');
    }
}
