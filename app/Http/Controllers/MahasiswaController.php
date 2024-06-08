<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\User;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('admin.mahasiswa.mahasiswa', compact('mahasiswa'));
    }
    public function create()
    {
        return view('admin.mahasiswa.tambahmhs');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa.editmhs', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $input = $request->all();

        if ($request->password) {
            $input['password'] = Hash::make($request->password);
        } else {
            $input['password'] = $mahasiswa->user->password;
        }
        $mahasiswa->update($input);
        $mahasiswa->user->update($input);

        return redirect()->route('mahasiswa.index');
    }

    public function store(MahasiswaRequest $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa'
        ]);
        Mahasiswa::create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'jk' => $request->jk,
            'jurusan' => $request->jurusan,
            'user_id' => $user->id,
        ]);
        return redirect()->route('mahasiswa.index');
    }


    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrfail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }

    public function generate($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $user = User::create([
            'nama' => $mahasiswa->nama,
            'email' => $mahasiswa->npm . '@gmail.com',
            'username' => $mahasiswa->npm,
            'password' => Hash::make('12345'),
            'role' => 'mahasiswa'
        ]);
        $mahasiswa->user_id = $user->id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index');
    }
}
