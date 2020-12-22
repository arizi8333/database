@extends('Layout.master')

@section('content')
<div class="card">
        <div class="card-header">
            <strong>List Data Penduduk</strong>
                <a class="btn btn-success btn-sm float-right" href="{{ route('Penduduk.create') }}"><i class="bi bi-plus">Tambah Penduduk</i></a>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Nama Penduduk</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
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
                            {{ $penduduk->tempat_lahir }}
                        </td>
                        <td>
                            {{ $penduduk->tanggal_lahir }}
                        </td>
                        <td>
                            <form action="{{ route('Penduduk.destroy', $penduduk->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('Penduduk.show',$penduduk->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('Penduduk.edit',$penduduk->id) }}">Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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