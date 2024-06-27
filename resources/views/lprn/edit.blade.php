@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 10%;">
    <div class="card">
        <div class="card-header">
             Edit Data
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/update-lprn" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $lprn->id }}">
                <div class="row">
                    <label for="kt" class=" control-label">nbi </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $lprn->nbi }}" name="nbi" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">nama </label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $lprn->nama }}" name="nama" required>
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