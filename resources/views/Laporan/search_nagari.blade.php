@extends('Layout.master')

@section('content')
<div class="card">
        <div class="card-header">
            <strong>Hasil Pencarian Data</strong>
        </div>

        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>Nama Penduduk</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
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