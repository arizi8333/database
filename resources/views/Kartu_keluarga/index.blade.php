@extends('Layout.master')

@section('content')
<div class="card">
        <div class="card-header">
            <strong>List Data Keluarga</strong>
                <a class="btn btn-success btn-sm float-right" href="{{ route('KartuKeluarga.create') }}"><i class="bi bi-plus">Tambah Kartu Keluarga</i></a>
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
                @forelse($kartukeluargas as $kartukeluarga)
                    <tr>
                        <td>
                            {{ $kartukeluarga->no }}
                        </td>
                        <td>
                            {{ $kartukeluarga->tanggal_pencatatan }}
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('KartuKeluarga.edit',$kartukeluarga->id) }}">Edit</a>
                            <a class="btn btn-secondary btn-sm" href="{{ route('KartuKeluarga.show',$kartukeluarga->id) }}">More</a>
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