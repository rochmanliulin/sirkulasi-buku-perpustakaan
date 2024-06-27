@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 10%;">
    <div class="card">
        <div class="card-header">
             Tambah Data
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/store-mhs
            " method="post">
                @csrf
                <div class="row">
                    <label for="kt" class=" control-label">Kode_mk </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="kode_mk" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">nama_mk </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="nama_mk" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">sks </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="sks" required>
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