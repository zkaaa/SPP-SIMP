<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class PetugasController extends Controller
{
    public function index()
    {
        $title = 'Data Petugas';

        $petugas = User::role(['petugas', 'admin'])->get();
        return view('contents.petugas.index', compact('petugas'));
    }
    
    public function tambah()
    {
        $title = 'Tambah Petugas';

        $level = User::all();
        $role = Role::whereNotIn('name', ['siswa'])->get();
        return view('contents.petugas.tambah', compact('level', 'role'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);

        $user = User::create([
            'nama' => $request->nama_petugas,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->level == 'petugas') {
            $role = User::find($user->id);
            $role->syncRoles(['petugas']);
        }elseif($request->level == 'admin') {
            $role = User::find($user->id);
            $role->syncRoles(['admin']);
        }
        
        return redirect('/petugas')->with('success','Petugas berhasil ditambahkan');
    }

    public function edit($id_petugas)
    {
        $title = 'Edit Petugas';

        $petugas = User::where('id', $id_petugas)->first();
        $role = Role::whereNotIn('name', ['siswa'])->get();
        return view('contents.petugas.edit', compact('petugas', 'role'));
    }

    public function update(Request $request, $id_petugas)
    {

        $user = User::where('id', $id_petugas)->update([
            'nama' => $request->nama
        ]);

        if ($request->level == 'petugas') {
            $user = User::find($id_petugas);
            $user->syncRoles(['petugas']);
        }elseif($request->level == 'admin') {
            $user = User::find($id_petugas);
            $user->syncRoles(['admin']);
        }
        
        return redirect('/petugas')->with('success', 'Data berhasil dirubah');
    }

    public function delete($id_petugas)
    {
        User::where('id', $id_petugas)->delete();
        return redirect('/petugas')->with('success', 'Data berhasil dihapus');
    }
}
