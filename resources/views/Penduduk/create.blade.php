@extends('Layout.master')

@section('content')

<form method="POST" action="{{ route('Penduduk.store') }}">
@csrf
    <div class="card">
        <div class="card-header">
            <strong> <i class="cil-plus"></i> Tambah Data Penduduk</strong>
        </div>

        <div class="card-body">

        @include('Penduduk._form')

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>
@endsection