@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 10%;">
    <div class="card">
        <div class="card-header">
             Edit Data
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/update-mhs" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $mhs->id }}">
                <div class="row">
                    <label for="kt" class=" control-label">kode_mk </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->kode_mk }}" name="kode_mk" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">nama_mk </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->nama_mk }}" name="nama_mk" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">sks </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->sks }}" name="sks" required>
                </div>
                <div class="row mt-3 ">
                    <button type="submit" class="btn btn-primary w-25">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection