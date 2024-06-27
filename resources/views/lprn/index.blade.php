@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card " style="margin-top: 10%;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Laporan Hasil Studi</h4>
            <div class="d-flex justify-content-end">
                <a href="/tambah-lprn" class="btn btn-outline-success"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NBI</th>
                            <th>nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporan as $lprn)
                        <tr>
                            <td>
                                {{$lprn->nbi}}
                            </td>
                            <td>
                                {{$lprn->nama}}
                            </td>
                        
                            <td>
                                <a type="button" class="btn btn-outline-warning" href="/edit-lprn/{{ $lprn->nbi }}">Edit</a> &nbsp
                                
                                <a type="button" class="btn btn-outline-danger" href="/delete-lprn/{{ $lprn->nbi }}">Hapus</a>

                                <a href="laporan/{{ $lprn->nbi }}" class="btn btn-outline-primary">CETAK PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
