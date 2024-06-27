@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 10%;">
    <div class="card">
        <div class="card-header">
             Tambah Data
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/store-nm" method="post">
                @csrf
                <div class="row">
                    <label for="kt" class=" control-label">th_ajaran</label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="th_ajaran" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">semester </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="semester" required>
                </div>
                <div class="form-group">
                    <div class="row" > <label for="">NBI</label>
                        <select class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="nbi">
                            <option selected>-Pilih Kode_mk- </option>
                            @foreach($laporan as $mhs)
                                <option value="{{$mhs->nbi}}">{{$mhs->nbi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row" > <label for="">Kode_mk</label>
                        <select class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="kode_mk">
                            <option selected>-Pilih Kode_mk- </option>
                            @foreach($mahasiswa as $mhs)
                                <option value="{{$mhs->kode_mk}}">{{$mhs->nama_mk}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">nilai </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="nilai" required>
                </div>
                </div>
                <div class="row mt-3 ">
                    <button type="submit" class="btn btn-primary w-25">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection