@extends('Layout.master')

@section('content')
<div class="card">
        <div class="card-header">
            <strong>No Kartu Keluarga : {{ $kartukeluargas->no }}</strong>
                <a class="btn btn-success btn-sm float-right" href="{{ route('Penduduk.create') }}"><i class="bi bi-plus">Tambah Anggota Keluarga</i></a>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>No Kartu Keluarga</th>
                    <th>Tanggal Pencatatan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($penduduks as $penduduk)
                    <tr>
                        <td>
                            {{ $penduduk->nama }}
                        </td>
                        <td>
                            {{ $penduduk->nik }}
                        </td>
                        <td>
                        <form action="{{ route('KartuKeluarga.destroy', $penduduk->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus Anggota</button>
                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada data penduduk</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>

    </div>
@endsection