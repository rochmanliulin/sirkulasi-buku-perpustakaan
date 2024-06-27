@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card " style="margin-top: 10%;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Nilai</h4>
            <div class="d-flex justify-content-end">
                <a href="/tambah-nm" class="btn btn-outline-success"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>th_ajaran </th>
                            <th>semester</th>
                            <th> nbi </th>
                            <th>kode_mk</th>
                            <th>nilai</th>
                              </div>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nilai as $nm)
                        <tr>
                            <td>
                                {{$nm->th_ajaran}}
                            </td>
                            <td>
                                {{$nm->semester}}
                            </td>
                            <td>
                                {{$nm->nbi}}
                            </td>
                            
                            <td>
                                {{$nm->kode_mk}}
                            </td>
                            <td>
                                {{$nm->nilai}}
                            </td>
                            
                            <td>
                                <a type="button" class="btn btn-outline-warning" href="/edit-nm/{{ $nm->id }}">Edit</a> &nbsp
                                
                                <a type="button" class="btn btn-outline-danger" href="/delete-nm/{{ $nm->id }}">Hapus</a>
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
