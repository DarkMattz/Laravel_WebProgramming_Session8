<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class MahasiswaController extends Controller
{

    public function index()
    {
        return view('home')
            ->with('mahasiswas', Mahasiswa::all());
    }

    public function edit($id){
        return view('editor')
            ->with('mahasiswa', Mahasiswa::findOrFail($id));
    }

    public function input(){
        return view('editor');
    }

    public function inputSaved(Request $request){
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
        ]);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect()->home();
    }

    public function updateEdited(Request $request, $id){
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'

        ]);
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect()->home();
    }

    public function delete($id){
        Mahasiswa::findOrFail($id)->delete();
        return redirect()->home();
    }
}
