@extends('Layout.master')
@section('content')

<div class="row justify-content-center">
        <div class="col">
            <div class="card">

                <div class="card-header">
                    <strong><i class="cil-zoom"></i> Detail Informasi Penduduk</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('Penduduk._detail')
                </div>

                {{--CARD FOOTER--}}
                <div class="card-footer">
                </div>

            </div>
        </div>

    </div>

@endsection