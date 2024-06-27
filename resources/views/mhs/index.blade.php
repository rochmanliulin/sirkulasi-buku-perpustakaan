@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card " style="margin-top: 10%;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Mata Kuliah</h4>
            <div class="d-flex justify-content-end">
                <a href="/tambah-mhs" class="btn btn-outline-success"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode_mk </th>
                            <th>nama_mk </th>
                            <th> sks </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mata_kuliah as $mhs)
                        <tr>
                            <td>
                                {{$mhs->kode_mk}}
                            </td>
                            
                            <td>
                                {{$mhs->nama_mk}}
                            </td>
                            <td>
                                {{$mhs->sks}}
                            </td>
                        
                            <td>
                                <a type="button" class="btn btn-outline-warning" href="/edit-mhs/{{ $mhs->kode_mk }}">Edit</a> &nbsp
                                
                                <a type="button" class="btn btn-outline-danger" href="/delete-mhs/{{ $mhs->kode_mk }}">Hapus</a>
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
