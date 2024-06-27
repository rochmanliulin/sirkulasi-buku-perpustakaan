<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $lprn = laporan::all();
        return view('lprn.index', [
            'laporan' => $lprn
        ]);
    }

    public function Tambah()
    {
        return view('lprn.tambah');
    }

    public function store(Request $request)
    {
        laporan::create([
            'nbi' => $request->nbi,
            'nama' => $request->nama,
        ]);

        return redirect('/index-lprn');
    }

    public function edit($nbi)
    {
        $lprnedit = laporan::where('nbi', $nbi)->first();

        return view('lprn.edit', [
            'lprn' => $lprnedit
        ]);
    }

    public function update(Request $request)
    {
        laporan::where('id', $request->id)->update([
            'nbi' => $request->nbi,
            'nama' => $request->nama
        ]);

        return redirect('/index-lprn');
    }

    public function delete($nbi)
    {
        $data = laporan::where('nbi', $nbi)->first();
        $data->delete();
        return redirect('/index-lprn');
    }
}
