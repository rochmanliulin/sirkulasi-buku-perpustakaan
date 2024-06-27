<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mata_kuliah;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mhs = mata_kuliah::all();
        return view('mhs.index', [
            'mata_kuliah' => $mhs
        ]);
    }

    public function Tambah()
    {
        return view('mhs.tambah');
    }

    public function store(Request $request)
    {
        mata_kuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/index-mhs');
    }

    public function edit($kode_mk)
    {
        $mhsedit = mata_kuliah::where('kode_mk', $kode_mk)->first();
        return view('mhs.edit', [
            'mhs' => $mhsedit
        ]);
    }

    public function update(Request $request)
    {
        mata_kuliah::where('id', $request->id)->update([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks
        ]);

        return redirect('/index-mhs');
    }

    public function delete($kode_mk)
    {
        $data = mata_kuliah::where('kode_mk', $kode_mk)->first();
        $data->delete();
        return redirect('/index-mhs');
    }
}
