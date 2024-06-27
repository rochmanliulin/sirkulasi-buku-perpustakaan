<?php

namespace App\Http\Controllers;

use App\Models\mata_kuliah;
use App\Models\laporan;
use Illuminate\Http\Request;
use App\Models\nilai;
use Illuminate\Support\Facades\DB;
use PDF; //library pdf


class NilaiController extends Controller
{

    public function index()
    {
        $nm = nilai::all();
        return view('nm.index', [
            'nilai' => $nm
        ]);
    }
    

    public function user()
    {
        $nm = nilai::all();
        return view('nm.user', [
            'nilai' => $nm
        ]);
    }

    public function Tambah()
    {
        $mahasiswa= mata_kuliah::all();
        $laporan = laporan::all();
        return view('nm.tambah', compact('mahasiswa', 'laporan'));
    }

    public function create()
    {
        $nm = nilai::all();
        return view('nm.index',compact('nm'));
    }
    public function store(Request $request)
    {
        nilai::create([
            'th_ajaran' => $request->th_ajaran,
            'semester' => $request->semester,
            'nbi' => $request->nbi,
            'kode_mk' => $request->kode_mk,
            'nilai' => $request->nilai,
            
        ]);
        // dd('nilai');

        return redirect('/index-nm');
    }

    public function edit($id)
    {
        $nmedit = nilai::where('id', $id)->first();
        $mahasiswa= mata_kuliah::all();
        $laporan = laporan::all();
        return view('nm.edit', [
            'nm' => $nmedit,
            'mahasiswa'=> $mahasiswa,
            'laporan' => $laporan
        ]);
    }

    public function update(Request $request)
    {
        nilai::where('id', $request->id)->update([
            'th_ajaran' => $request->th_ajaran,
            'semester' => $request->semester,
            'nbi' => $request->nbi,
            'kode_mk' => $request->kode_mk,
            'nilai' => $request->nilai,
        ]);

        return redirect('/index-nm');
    }

    public function delete($id)
    {
        $data = nilai::where('id', $id)->first();
        $data->delete();
        
        return redirect('/index-nm');
    }

    public function print(string $nbi)
    {
        $lprn = nilai::where('nbi', $nbi)->get();
        
        // Ambil nilai objek pertama dari hasil query
        $firstLprn = $lprn->first();
        
        // Cek apakah data nilai ditemukan
        if ($firstLprn) {
            // Mengakses relasi mata_kuliah dari model nilai
            $matkul = $firstLprn->mata_kuliah;
            
            $bobot = [
                'A' => 4,
                'A-' => 3.75,
                'AB' => 3.5,
                'B+' => 3.25,
                'B' => 3.0,
                'B-' => 2.75,
                'C+' => 2.5,
                'C' => 2.25,
                'C-' => 2,
                'D' => 1.5,
                'E' => 1
            ];
        
            $hasil_bobot = 0;
        
            foreach ($lprn as $item) {
                $nilai = $item->nilai;
        
                if (isset($bobot[$nilai])) {
                    $hasil_bobot += $bobot[$nilai];
                }
            }
        
            $total_sks = $matkul->sks;
            $total_bobot = $total_sks * $hasil_bobot;
        
            $pdf = PDF::loadview('lprn.laporan', [
                'laporan' => $lprn,
                'bobot' => $hasil_bobot,
                'total_bobot' => $total_bobot
            ]);
        
            return $pdf->stream('laporan.pdf');
        }
    }

}
